<?php

class BaseController extends Controller {

    /**
     * Initializer.
     *
     * @access   public
     * @return \BaseController
     */
    public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		$user = Auth::user();

		
		$layout = 'admin.layouts.default';

		$this->layout = $layout;

		// if ( ! is_null($this->layout))
		// {
		// 	$this->layout = View::make($this->layout);
		// }
	}

	public function sendMail($template, $email, $name, $data = array()) {

		\Mail::send($template, $data, function($message) use ($data, $email, $name)
        {
        	$subject = isset($data['subject']) ? $data['subject'] : 'Welcome!';
            $message->to($email, $name)->subject($subject);
        });
	}

}