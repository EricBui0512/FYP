<?php 
interface IUserRepository{
	public function getUserByConfirmCode($code);
	public function signup($input);
	public function login($input);
	public function isThrottled($input);
	public function existsButNotConfirmed($input);
	public function resetPassword($input);
	public function save(User $instance);
}