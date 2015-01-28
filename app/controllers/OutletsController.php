<?php

class OutletsController extends \BaseController {

	/**
	 * Display a listing of outlets
	 *
	 * @return Response
	 */
	public function index()
	{
		$outlets = Outlet::all();

		return View::make('outlets.index', compact('outlets'));
	}

	/**
	 * Show the form for creating a new outlet
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('outlets.create');
	}

	/**
	 * Store a newly created outlet in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Outlet::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Outlet::create($data);

		return Redirect::route('outlets.index');
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

		return View::make('outlets.show', compact('outlet'));
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

		return View::make('outlets.edit', compact('outlet'));
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
