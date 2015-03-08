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
        return Redirect::to('feedback/create')->withInput()->withErrors($validator);
    }

    public function listTrans()
    {
        $trans = DealTransaction::owner()->get();

        return View::make('site.dealtransactions.index', compact('trans'));
    }

    public function crateTrans( $dealId )
    {
        return View::make('site.dealtransactions.create', compact('dealId'));
    }

    public function storeTrans()
    {
        // Validate the inputs
        $validator = Validator::make(Input::all(), DealTransaction::$rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            $user = Auth::user();

            // Get the inputs, with some exceptions
            $data = Input::except('csrf_token');
            $data['consumer_id'] = $user->id;
            $data['consumer_email'] = $user->email;

            if(DealTransaction::create($data))
            {

                // TODO return ajax view
            }

        }

        // Form validation failed
        return Redirect::to('transaction/create')->withInput()->withErrors($validator);
    }

    public function cancelTrans()
    {
        $inputs = Input::all();

        $cancel = new Cancellation;

        $cancel->tran_id = $inputs['tran_id'];
        $cancel->who_id = $inputs['who_id'];
        $cancel->reason = $inputs['reason'];
        $cancel->who = $inputs['who'];

        if ( $cancel->save() )
        {
            DealTransaction::delete();

            return Redirect::to('transaction')->with('success', 'Cancel the successfully');
        }

        return Redirect::to('transaction')->with('error', 'There was an issue cancelling the transaction. Please try again.');

    }
}
