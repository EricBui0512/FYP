<?php

class ConsumersController extends \BaseController {

	/**
	 * Display a listing of consumers
	 *
	 * @return Response
	 */
	public function index()
	{
		$consumers = Consumer::all();

		return View::make('consumers.index', compact('consumers'));
	}

	/**
	 * Show the form for creating a new consumer
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('consumers.create');
	}

	/**
	 * Store a newly created consumer in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Consumer::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Consumer::create($data);

		return Redirect::route('consumers.index');
	}

	/**
	 * Display the specified consumer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$consumer = Consumer::findOrFail($id);

		return View::make('consumers.show', compact('consumer'));
	}

	/**
	 * Show the form for editing the specified consumer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$consumer = Consumer::find($id);

		return View::make('consumers.edit', compact('consumer'));
	}

	/**
	 * Update the specified consumer in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$consumer = Consumer::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Consumer::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$consumer->update($data);

		return Redirect::route('consumers.index');
	}

	/**
	 * Remove the specified consumer from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Consumer::destroy($id);

		return Redirect::route('consumers.index');
	}

}
