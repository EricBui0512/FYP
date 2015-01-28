<?php

class CaancellationsController extends \BaseController {

	/**
	 * Display a listing of caancellations
	 *
	 * @return Response
	 */
	public function index()
	{
		$caancellations = Caancellation::all();

		return View::make('caancellations.index', compact('caancellations'));
	}

	/**
	 * Show the form for creating a new caancellation
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('caancellations.create');
	}

	/**
	 * Store a newly created caancellation in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Caancellation::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Caancellation::create($data);

		return Redirect::route('caancellations.index');
	}

	/**
	 * Display the specified caancellation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$caancellation = Caancellation::findOrFail($id);

		return View::make('caancellations.show', compact('caancellation'));
	}

	/**
	 * Show the form for editing the specified caancellation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$caancellation = Caancellation::find($id);

		return View::make('caancellations.edit', compact('caancellation'));
	}

	/**
	 * Update the specified caancellation in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$caancellation = Caancellation::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Caancellation::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$caancellation->update($data);

		return Redirect::route('caancellations.index');
	}

	/**
	 * Remove the specified caancellation from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Caancellation::destroy($id);

		return Redirect::route('caancellations.index');
	}

}
