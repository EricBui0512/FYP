<?php

class UserController extends BaseController {

    /**
     * User Model
     * @var User
     */
    protected $user;

    /**
     * @var UserRepository
     */
    protected $userRepo;

    /**
     * Inject the models.
     * @param User $user
     * @param UserRepository $userRepo
     */
    public function __construct(User $user, IUserRepository $userRepo, IRetailerRepository $retailer, IOutletRepository $outlet)
    {
        parent::__construct();
        $this->user = $user;
        $this->retailer = $retailer;
        $this->userRepo = $userRepo;
        $this->outlet = $outlet;
    }

    /**
     * Users settings page
     *
     * @return View
     */
    public function getIndex()
    {
        list($user,$redirect) = $this->user->checkAuthAndRedirect('user');
        if($redirect){return $redirect;}

        // Show the page
        return View::make('site/user/index', compact('user'));
    }
    
    /**
     * Users Signup
     *
     * @return View
     */
    public function signup()
    {   
        return View::make('site/user/signup');
    }
    /**
     * Stores new user
     *
     */
    public function postIndex()
    {
        $user = $this->userRepo->signup(Input::all());

        if ($user->id) {
            if (Config::get('confide::signup_email')) {
                Mail::queueOn(
                    Config::get('confide::email_queue'),
                    Config::get('confide::email_account_confirmation'),
                    compact('user'),
                    function ($message) use ($user) {
                        $message
                            ->to($user->email, $user->username)
                            ->subject(Lang::get('confide::confide.email.account_confirmation.subject'));
                    }
                );
            }

            return Redirect::to('user/login')
                ->with('success', Lang::get('user/user.user_account_created'));
        } else {
            $error = $user->errors()->all(':message');
            $type = Input::get('type');

            return Redirect::to('user/create/' . $type)
                ->withInput(Input::except('password'))
                ->with('error', $error);
        }

    }

    /**
     * Edits a user
     * @var User
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEdit(User $user)
    {
        $oldUser = clone $user;

        $user->username = Input::get('username');
        $user->email = Input::get('email');
        $user->phone_number = Input::get('phone_number');

        $password = Input::get('password');
        $passwordConfirmation = Input::get('password_confirmation');

        if ( ! empty($password) ) {

            if ($password != $passwordConfirmation) {

                // Redirect to the new user page
                $error = Lang::get('admin/users/messages.password_does_not_match');
                return Redirect::to('user')
                    ->with('error', $error);
            }
            else {
                $user->password = $password;
                $user->password_confirmation = $passwordConfirmation;
            }
        }

        if ($this->userRepo->save($user)) {
            return Redirect::to('user/profile/' . $user->username)
                ->with( 'success', Lang::get('user/user.user_account_updated') );
        } else {
            $error = $user->errors()->all(':message');
            return Redirect::to('user')
                ->withInput(Input::except('password', 'password_confirmation'))
                ->with('error', $error);
        }

    }

    /**
     * Displays the form for user creation
     *
     */
    public function getCreate()
    {
        return View::make('site/user/create');
    }
    /**
     * Displays the form for user creation
     *
     */
    public function userCreate($type)
    {
        return View::make('site/user/create',compact('type'));
    }


    /**
     * Displays the login form
     *
     */
    public function getLogin()
    {
        $user = Auth::user();

        if (!empty($user->id)) {

            return Redirect::to('/');
        }

        return View::make('site/user/login');
    }

    /**
     * Attempt to do login
     *
     */
    public function postLogin()
    {
        $repo = App::make('UserRepository');
        $input = Input::all();

        if ($this->userRepo->login($input)) {

            $user = Auth::user();

            if ( $user->user_type === Config::get('constants.USER_TYPE_ADMIN') ) {

                return Redirect::to('admin');
            }
            else {

                return Redirect::intended('/');
            }
        }
        else {

            if ($this->userRepo->isThrottled($input)) {

                $err_msg = Lang::get('confide::confide.alerts.too_many_attempts');
            }
            elseif ($this->userRepo->existsButNotConfirmed($input)) {
               
                $err_msg = Lang::get('confide::confide.alerts.not_confirmed');
            }
            else {

                $err_msg = Lang::get('confide::confide.alerts.wrong_credentials');
            }

            return Redirect::to('user/login')
                ->withInput(Input::except('password'))
                ->with('error', $err_msg);
        }
    }

    /**
     * Attempt to confirm account with code
     *
     * @param  string $code
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getConfirm($code)
    {
        if ( Confide::confirm( $code ) )
        {
            return Redirect::to('user/login')
                ->with( 'notice', Lang::get('confide::confide.alerts.confirmation') );
        }
        else
        {
            return Redirect::to('user/login')
                ->with( 'error', Lang::get('confide::confide.alerts.wrong_confirmation') );
        }
    }

    /**
     * Displays the forgot password form
     *
     */
    public function getForgot()
    {
        return View::make('site/user/forgot');
    }

    /**
     * Attempt to reset password with given email
     *
     */
    public function postForgotPassword()
    {
        if (Confide::forgotPassword(Input::get('email'))) {
            $notice_msg = Lang::get('confide::confide.alerts.password_forgot');
            return Redirect::to('user/forgot')
                ->with('notice', $notice_msg);
        } else {
            $error_msg = Lang::get('confide::confide.alerts.wrong_password_forgot');
            return Redirect::to('user/login')
                ->withInput()
                ->with('error', $error_msg);
        }
    }

    /**
     * Shows the change password form with the given token
     *
     */
    public function getReset( $token )
    {

        return View::make('site/user/reset')
            ->with('token',$token);
    }


    /**
     * Attempt change password of the user
     *
     */
    public function postReset()
    {

        $input = array(
            'token'                 =>Input::get('token'),
            'password'              =>Input::get('password'),
            'password_confirmation' =>Input::get('password_confirmation'),
        );

        // By passing an array with the token, password and confirmation
        if ($this->userRepo->resetPassword($input)) {
            $notice_msg = Lang::get('confide::confide.alerts.password_reset');
            return Redirect::to('user/login')
                ->with('notice', $notice_msg);
        } else {
            $error_msg = Lang::get('confide::confide.alerts.wrong_password_reset');
            return Redirect::to('user/reset', array('token'=>$input['token']))
                ->withInput()
                ->with('error', $error_msg);
        }

    }

    /**
     * Log the user out of the application.
     *
     */
    public function getLogout()
    {
        Confide::logout();

        return Redirect::to('/');
    }

    /**
     * Get user's profile
     * @param $username
     * @return mixed
     */
    public function getProfile($username)
    {
        $userModel = new User;
        $user = $userModel->getUserByUsername($username);

        // Check if the user exists
        if (is_null($user))
        {
            return App::abort(404);
        }

        return View::make('site/user/profile', compact('user'));
    }

    /**
     * Get edit user's profile
     * @param $username
     * @return mixed
     */
    public function getEdit($username)
    {
        $userModel = new User;
        $user = $userModel->getUserByUsername($username);

        // Check if the user exists
        if (is_null($user))
        {
            return App::abort(404);
        }

        $images = Picture::getByRefId( $user->id, 'user');

        return View::make('site/user/edit', compact('user'))
            ->nest('imageForm', 'site.partials.image.create', ['refId' => $user->id, 'type' => 'user', 'images' => $images]);
    }

    
    public function getSettings()
    {
        list($user,$redirect) = User::checkAuthAndRedirect('user/settings');
        if($redirect){return $redirect;}

        return View::make('site/user/profile', compact('user'));
    }

    /**
     * Process a dumb redirect.
     * @param $url1
     * @param $url2
     * @param $url3
     * @return string
     */
    public function processRedirect($url1,$url2,$url3)
    {
        $redirect = '';
        if( ! empty( $url1 ) )
        {
            $redirect = $url1;
            $redirect .= (empty($url2)? '' : '/' . $url2);
            $redirect .= (empty($url3)? '' : '/' . $url3);
        }
        return $redirect;
    }

    /**
     * Users settings page
     *
     * @return View
     */
    public function getDashboard()
    {
        $user = Auth::user();

        if ( $user->user_type === Config::get('constants.USER_TYPE_RETAILER') )
        {
            return Redirect::route('retailer.dashboard');
        }
        elseif ( $user->user_type === Config::get('constants.USER_TYPE_ADMIN') )
        {
            return Redirect::to('admin');
        }
        else
        {
            return Redirect::route('user.dashboard');
        }
    }
    public function postBook(){
        $response = null;
        $Bill = null;
        
        $spa_id = Input::get('spaName');
        $outlet_id = Input::get('spaLocation');
        $service_id = Input::get('serviceName');
        $apptDate = Input::get('apptDate');
        $apptTime = Input::get('timeSlot');

        if (!empty($spa_id) && !empty($outlet_id) &&!empty($service_id) && !empty($apptDate) ) {
            
            $apptDateTime = strtotime($apptDate." ".$apptTime);
            $service = Service::find($service_id);
            $response = array(
                "retailerName" => Retailer::find($spa_id)->name,
                "outletName" => Outlet::find($outlet_id)->name,
                "serviceName" => $service->name." (".$service->time_operate." mins)",
                "apptDateTime" => $apptDateTime,
                "price" => $service->price
                );
            if(!Auth::user())
                return View::make('site/user/book',compact('response','Bill'));
            $deal = Deal::where('service_id','=',$service_id)->where('deal_type','=','Service')->first();
            if ($deal==null) {
                $deal = new Deal;
                $deal->service_id = $service_id;
                $deal->deal_type = 'Service';
                $deal->title = $service->name;
                $deal->amount = $service->price;
                $deal->discount = 0;
                $deal->special_request = "";
                $deal->status = "active";
                $deal->save();
            }
            $Bill=new DealTransaction();
            $Bill->deal_id=$deal->id;
            $Bill->consumer_id=Auth::user()->id;
            $Bill->consumer_email=Auth::user()->email;
            $Bill->qty=1;
            $Bill->amount=$service->price;
            $Bill->total=$service->price;
            $Bill->save();
            return View::make('site/user/book',compact('response','Bill'));
        }
        return Redirect::route('/');
    }

    public function getSpaLocations(){
        $retailer_id = $_GET['retailer_id'];
        $data = $this->retailer->getSpaLocations($retailer_id);
        $data_string = "<option value='0'>Select a location</option>";
        foreach ($data as $item) {
            $data_string.="<option value='$item->id'>$item->name($item->outlet_register_id)</option>";
        }
        return $data_string;
    }
     public function getServiceNames(){
        $outlet_id = $_GET['outlet_id'];
        $data = $this->retailer->getServiceNames($outlet_id);
        $data_string = "";//"<option value='0'>All</option>";
        foreach ($data as $item) {
            $data_string.="<option value='$item->id'>$item->name($item->time_operate mins)</option>";
        }
        return $data_string;
    }
    public function getTimeSlot(){
        $service_id = $_GET['service_id'];
        $data = $this->outlet->getTimeSlot($service_id);
        $data_string = "";
        foreach ($data as $item) {
            $data_string.="<option value='".date("H:i",$item)."'>".date("H:i",$item)."</option>";
        }
        return $data_string;
    }
}
