<?php

class CancellationsController extends \BaseController {

	/**
	 * Display a listing of cancellations
	 *
	 * @return Response
	 */
	public function index()
	{
		$cancellations = Caancellation::all();

		return View::make('cancellations.index', compact('cancellations'));
	}

	/**
	 * Show the form for creating a new caancellation
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('cancellations.create');
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

		return Redirect::route('cancellations.index');
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

		return View::make('cancellations.show', compact('caancellation'));
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

		return View::make('cancellations.edit', compact('caancellation'));
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

		return Redirect::route('cancellations.index');
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

		return Redirect::route('cancellations.index');
	}

}
