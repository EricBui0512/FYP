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
		$countries = Country::lists('country','id');
		$cities = City::lists('city','id');
		$outlets = Outlet::owner()->lists('name', 'id');

		return View::make('site.outlets.create',compact('countries','cities', 'outlets'));
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

		Outlet::create($data);

		return Redirect::route('outlet.index');
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
		// $outlet = Outlet::findOrFail($id);

		return View::make('site.outlets.index');
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

		return View::make('site.outlets.edit', compact('outlet'));
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

		$outlet->update($data);

		return Redirect::route('outlets.index');
	}

	/**
	 * Remove the specified outlet from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Outlet::destroy($id);

		return Redirect::route('outlets.index');
	}

}
