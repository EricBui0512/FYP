<?php

/**
 * Class UserRepository
 *
 * This service abstracts some interactions that occurs between Confide and
 * the Database.
 */
class UserRepository implements IUserRepository
{

	public function __construct(\User $user)
    {
        $this->user = $user;
    }
     
    public function __call($method, $args)
    {
        return call_user_func_array([$this->user, $method], $args);
    }

	/**
	 * @param $code
	 * @return User|null
	 */
	public function getUserByConfirmCode($code) {
		return User::where('confirmation_code', '=', $code)->first();
	}

	/**
	 * Signup a new account with the given parameters
	 *
	 * @param  array $input Array containing 'username', 'email' and 'password'.
	 *
	 * @return  User User object that may or may not be saved successfully. Check the id to make sure.
	 */
	public function signup($input)
	{
		$user = new User;

		$type = ( array_get($input, 'type') == 'retailer' ) ? 'retailer' : 'user';
		$user->username = array_get($input, 'username');
		$user->email    = array_get($input, 'email');
		$user->password = array_get($input, 'password');
		$user->user_type = $type;

		// The password confirmation will be removed from model
		// before saving. This field will be used in Ardent's
		// auto validation.
		$user->password_confirmation = array_get($input, 'password_confirmation');

		// Generate a random confirmation code
		$user->confirmation_code     = md5(uniqid(mt_rand(), true));

		// Save if valid. Password field will be hashed before save
		$this->save($user);

		 Activity::log([
            'contentId'   => $user->id,
            'contentType' => 'User',
            'action'      => 'SignUp',
            'description' => 'Created a User',
            'details'     => 'Username: '.$user->username,
            'updated'     => true
        ]);

		return $user;
	}

	/**
	 * Attempts to login with the given credentials.
	 *
	 * @param  array $input Array containing the credentials (email/username and password)
	 *
	 * @return  boolean Success?
	 */
	public function login($input)
	{
		 Activity::log([
            'contentId'   => 0,
            'contentType' => 'User',
            'action'      => 'Login',
            'description' => 'User log in',
            'details'     => 'Username: '.$input['username'],
            'updated'     => false
        ]);
		if (! isset($input['password'])) {
			$input['password'] = null;
		}

		return Confide::logAttempt($input, Config::get('confide::signup_confirm'));
	}

	/**
	 * Checks if the credentials has been throttled by too
	 * much failed login attempts
	 *
	 * @param  array $credentials Array containing the credentials (email/username and password)
	 *
	 * @return  boolean Is throttled
	 */
	public function isThrottled($input)
	{
		return Confide::isThrottled($input);
	}

	/**
	 * Checks if the given credentials correponds to a user that exists but
	 * is not confirmed
	 *
	 * @param  array $credentials Array containing the credentials (email/username and password)
	 *
	 * @return  boolean Exists and is not confirmed?
	 */
	public function existsButNotConfirmed($input)
	{
		$user = Confide::getUserByEmailOrUsername($input);

		if ($user) {
			$correctPassword = Hash::check(
				isset($input['password']) ? $input['password'] : false,
				$user->password
			);

			return (! $user->confirmed && $correctPassword);
		}
	}

	/**
	 * Resets a password of a user. The $input['token'] will tell which user.
	 *
	 * @param  array $input Array containing 'token', 'password' and 'password_confirmation' keys.
	 *
	 * @return  boolean Success
	 */
	public function resetPassword($input)
	{
		$result = false;
		$user   = Confide::userByResetPasswordToken($input['token']);

		if ($user) {
			$user->password              = $input['password'];
			$user->password_confirmation = $input['password_confirmation'];
			$result = $this->save($user);
		}

		// If result is positive, destroy token
		if ($result) {
			Confide::destroyForgotPasswordToken($input['token']);
		}

		Activity::log([
            'contentId'   => 0,
            'contentType' => 'User',
            'action'      => 'resetPassword',
            'description' => 'User reset password',
            'details'     => 'Username: '.$input['username'],
            'updated'     => false
        ]);

		return $result;
	}

	/**
	 * Simply saves the given instance
	 *
	 * @param  User $instance
	 *
	 * @return  boolean Success
	 */
	public function save(User $instance)
	{
		Activity::log([
            'contentId'   => 0,
            'contentType' => 'User',
            'action'      => 'Update',
            'description' => 'Update user info',
            'details'     => 'Username: '.$instance->username,
            'updated'     => false
        ]);
		return $instance->save();
	}


}
