<?php

class DescriptionsController extends \BaseController {

	/**
	 * Display a listing of descriptions
	 *
	 * @return Response
	 */
	public function index()
	{
		$descriptions = Description::all();

		return View::make('descriptions.index', compact('descriptions'));
	}

	/**
	 * Show the form for creating a new description
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('descriptions.create');
	}

	/**
	 * Store a newly created description in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Description::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Description::create($data);

		return Redirect::route('descriptions.index');
	}

	/**
	 * Display the specified description.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$description = Description::findOrFail($id);

		return View::make('descriptions.show', compact('description'));
	}

	/**
	 * Show the form for editing the specified description.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$description = Description::find($id);

		return View::make('descriptions.edit', compact('description'));
	}

	/**
	 * Update the specified description in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$description = Description::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Description::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$description->update($data);

		return Redirect::route('descriptions.index');
	}

	/**
	 * Remove the specified description from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Description::destroy($id);

		return Redirect::route('descriptions.index');
	}

}
