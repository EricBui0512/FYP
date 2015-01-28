<?php

class DetailsController extends \BaseController {

	/**
	 * Display a listing of details
	 *
	 * @return Response
	 */
	public function index()
	{
		$details = Detail::all();

		return View::make('details.index', compact('details'));
	}

	/**
	 * Show the form for creating a new detail
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('details.create');
	}

	/**
	 * Store a newly created detail in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Detail::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Detail::create($data);

		return Redirect::route('details.index');
	}

	/**
	 * Display the specified detail.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$detail = Detail::findOrFail($id);

		return View::make('details.show', compact('detail'));
	}

	/**
	 * Show the form for editing the specified detail.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$detail = Detail::find($id);

		return View::make('details.edit', compact('detail'));
	}

	/**
	 * Update the specified detail in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$detail = Detail::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Detail::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$detail->update($data);

		return Redirect::route('details.index');
	}

	/**
	 * Remove the specified detail from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Detail::destroy($id);

		return Redirect::route('details.index');
	}

}
