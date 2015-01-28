<?php

class BussinesscatelogiesController extends \BaseController {

	/**
	 * Display a listing of bussinesscatelogies
	 *
	 * @return Response
	 */
	public function index()
	{
		$bussinesscatelogies = Bussinesscatelogy::all();

		return View::make('bussinesscatelogies.index', compact('bussinesscatelogies'));
	}

	/**
	 * Show the form for creating a new bussinesscatelogy
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('bussinesscatelogies.create');
	}

	/**
	 * Store a newly created bussinesscatelogy in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Bussinesscatelogy::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Bussinesscatelogy::create($data);

		return Redirect::route('bussinesscatelogies.index');
	}

	/**
	 * Display the specified bussinesscatelogy.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$bussinesscatelogy = Bussinesscatelogy::findOrFail($id);

		return View::make('bussinesscatelogies.show', compact('bussinesscatelogy'));
	}

	/**
	 * Show the form for editing the specified bussinesscatelogy.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$bussinesscatelogy = Bussinesscatelogy::find($id);

		return View::make('bussinesscatelogies.edit', compact('bussinesscatelogy'));
	}

	/**
	 * Update the specified bussinesscatelogy in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$bussinesscatelogy = Bussinesscatelogy::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Bussinesscatelogy::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$bussinesscatelogy->update($data);

		return Redirect::route('bussinesscatelogies.index');
	}

	/**
	 * Remove the specified bussinesscatelogy from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Bussinesscatelogy::destroy($id);

		return Redirect::route('bussinesscatelogies.index');
	}

}
