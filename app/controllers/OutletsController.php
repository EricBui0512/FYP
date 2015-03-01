<?php

class OutletsController extends \BaseController {

	protected $adminId = null;

	public function __construct()
	{

		parent::__construct();

		$this->adminId = Auth::id();
	}

	/**
	 * Display a listing of outlets
	 *
	 * @return Response
	 */
	public function index()
	{

		$outlets = Outlet::owner()->get();

		return View::make('site.outlets.index', compact('outlets'));
	}

	/**
	 * Show the form for creating a new outlet
	 *
	 * @return Response
	 */
	public function create()
	{

		$title = Lang::get('site/outlets/title.create_a_new_outlet');

		$countries = Country::lists('country','id');
		$cities = City::lists('city','id');
		$outlets = Outlet::owner()->lists('name', 'id');

		return View::make('site.outlets.create',compact('countries','cities', 'outlets', 'title'));
	}

	/**
	 * Store a newly created outlet in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$data = Input::except( 'summary' );
		$description = Input::only('full_description', 'summary');

		$validator = Validator::make($data, Outlet::$rules);

		if ($validator->fails())
		{

			return Redirect::back()->withErrors($validator)->withInput();
		}

		unset( $data['full_description'] );

		$desc = OutletDescription::create( $description );

		$data['admin_id'] = $this->adminId;
		$data['description_id'] = $desc->id;

		if ( Outlet::create($data) )
		{
			return Redirect::route('outlet.index')->with('success', Lang::get('site/outlets/messages.create.success'));
		}

		return Redirect::to('outlet/create')->with('error', Lang::get('site/outlets/messages.create.error'));

	}

	/**
	 * Display the specified outlet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$outlet = Outlet::findOrFail($id);

		return View::make('site.outlets.show', compact('outlet'));
	}

	/**
	 * Display the specified outlet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getList()
	{
		$outlets = Outlet::owner();

		$title = Lang::get('site/outlets/title.outlet_management');

		return View::make('site.outlets.index', compact('outlets', 'title'));
	}

	/**
	 * Show the form for editing the specified outlet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$outlet = Outlet::find($id);

		$title = Lang::get('site/outlets/title.outlet_update');

		return View::make('site.outlets.edit', compact('outlet', 'title'));
	}

	/**
	 * Update the specified outlet in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$outlet = Outlet::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Outlet::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if ( $outlet->update($data) )
		{
			return Redirect::route('outlets.index')->with('success', Lang::get('site/outlets/messages.update.success'));
		}

		return Redirect::route('outlet.edit')->with('error', Lang::get('site/outlets/messages.update.error'));
	}

	/**
	 * Remove the specified outlet from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if ( Outlet::destroy($id) )
		{
			return Redirect::route('outlets.index')->with('success', Lang::get('site/outlets/messages.delete.success'));
		}

		return Redirect::route('outlet.index')->with('error', Lang::get('site/outlets/messages.delete.error'));

	}

}
