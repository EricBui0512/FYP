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
	public function index()
	{
		$deals = Deal::owner()->get();

		return View::make('site.deals.index', compact('deals'));
	}

	/**
	 * Show the form for creating a new deal
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('site.deals.create');
	}

	/**
	 * Store a newly created deal in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Deal::$rules);

		if ( $validator->fails() )
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

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
	public function show($id)
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
	public function edit($id)
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
	public function update($id)
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
	public function destroy($id)
	{
		Deal::destroy($id);

		return Redirect::route('deal.index');
	}

}
