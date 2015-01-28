<?php

class FeedbacksController extends \BaseController {

	/**
	 * Display a listing of feedbacks
	 *
	 * @return Response
	 */
	public function index()
	{
		$feedbacks = Feedback::all();

		return View::make('feedbacks.index', compact('feedbacks'));
	}

	/**
	 * Show the form for creating a new feedback
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('feedbacks.create');
	}

	/**
	 * Store a newly created feedback in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Feedback::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Feedback::create($data);

		return Redirect::route('feedbacks.index');
	}

	/**
	 * Display the specified feedback.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$feedback = Feedback::findOrFail($id);

		return View::make('feedbacks.show', compact('feedback'));
	}

	/**
	 * Show the form for editing the specified feedback.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$feedback = Feedback::find($id);

		return View::make('feedbacks.edit', compact('feedback'));
	}

	/**
	 * Update the specified feedback in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$feedback = Feedback::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Feedback::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$feedback->update($data);

		return Redirect::route('feedbacks.index');
	}

	/**
	 * Remove the specified feedback from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Feedback::destroy($id);

		return Redirect::route('feedbacks.index');
	}

}
