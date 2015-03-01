<?php

class ConsumersController extends \BaseController {

	protected $user = null;

	public function __construct()
	{

		parent::__construct();

		$this->user = Auth::user();
	}

	/**
     * Users settings page
     *
     * @return View
     */
    public function getDashboard()
    {
        $user = Auth::user();

        return View::make('site.layouts.customer', compact('user'));
    }

}
