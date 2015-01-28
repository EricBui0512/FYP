<?php

class ServiceconditionsController extends \BaseController {

	/**
	 * Display a listing of serviceconditions
	 *
	 * @return Response
	 */
	public function index()
	{
		$serviceconditions = Servicecondition::all();

		return View::make('serviceconditions.index', compact('serviceconditions'));
	}

	/**
	 * Show the form for creating a new servicecondition
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('serviceconditions.create');
	}

	/**
	 * Store a newly created servicecondition in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Servicecondition::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Servicecondition::create($data);

		return Redirect::route('serviceconditions.index');
	}

	/**
	 * Display the specified servicecondition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$servicecondition = Servicecondition::findOrFail($id);

		return View::make('serviceconditions.show', compact('servicecondition'));
	}

	/**
	 * Show the form for editing the specified servicecondition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$servicecondition = Servicecondition::find($id);

		return View::make('serviceconditions.edit', compact('servicecondition'));
	}

	/**
	 * Update the specified servicecondition in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$servicecondition = Servicecondition::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Servicecondition::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$servicecondition->update($data);

		return Redirect::route('serviceconditions.index');
	}

	/**
	 * Remove the specified servicecondition from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Servicecondition::destroy($id);

		return Redirect::route('serviceconditions.index');
	}

}
