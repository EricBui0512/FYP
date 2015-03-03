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

     /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function createFeedback()
    {

        // Title
        $title = 'Create a new feedback';

        // Show the page
        return View::make('site.feedbacks.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function storeFeedback()
    {

        // Validate the inputs
        $validator = Validator::make(Input::all(), Feedback::$rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            // Get the inputs, with some exceptions
            $data = Input::except('csrf_token');

            $feedback = new Feedback;

            $feedback->feed_back = $data['feed_back'];
            $feedback->consumer_id = Auth::id();
            $feedback->deal_id = $data['deal_id'];

            if ($feedback->save())
            {
                $feedbacks = Feedback::ByDealId( $data['deal_id']);

               // Redirect to the new country page
                return View::make('site.feedbacks.index', 'feedbacks');
            }

        }

        // Form validation failed
        return Redirect::to('address/create')->withInput()->withErrors($validator);
    }


}
