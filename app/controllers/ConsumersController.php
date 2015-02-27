<?php

class ConsumersController extends \BaseController {

	protected $user = null;

	public function __construct()
	{

		parent::__construct();

		$this->user = Auth::user();
	}

	/**
	 * Display a listing of deals
	 *
	 * @return Response
	 */
	public function listDeal()
	{
		$deals = Deal::owner()->get();

		return View::make('site.deals.index', compact('deals'));
	}

	/**
	 * Show the form for creating a new deal
	 *
	 * @return Response
	 */
	public function createDeal( $retailerId )
	{
		return View::make('site.deals.create', compact('retailerId'));
	}

	/**
	 * Store a newly created deal in storage.
	 *
	 * @return Response
	 */
	public function storeDeal( $retailerId )
	{
		$validator = Validator::make($data = Input::all(), Deal::$rules);

		if ( $validator->fails() )
		{
			var_dump($validator->messages());die;
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['outlet_id'] = (int)$retailerId;
		$data['consumer_id'] = $this->user->id;
		$data['consumer_email'] = $this->user->email;

		Deal::create($data);

		return Redirect::route('deal.index');
	}

	/**
	 * Display the specified deal.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showDeal($id)
	{
		$deal = Deal::findOrFail($id);

		return View::make('site.deals.show', compact('deal'));
	}

	/**
	 * Show the form for editing the specified deal.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editDeal($id)
	{
		$deal = Deal::find($id);

		return View::make('site.deals.edit', compact('deal'));
	}

	/**
	 * Update the specified deal in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updateDeal($id)
	{
		$deal = Deal::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Deal::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$deal->update($data);

		return Redirect::route('deal.index');
	}

	/**
	 * Remove the specified deal from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function cancelDeal($id)
	{
		Deal::destroy( $id );

		return Redirect::route('deal.index');
	}

}
