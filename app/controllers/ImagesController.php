<?php

class ImagesController extends \BaseController {

	/**
	 * Display a listing of images
	 *
	 * @return Response
	 */
	public function index()
	{
		$images = Image::all();

		return View::make('images.index', compact('images'));
	}

	/**
	 * Show the form for creating a new image
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('images.create');
	}

	/**
	 * Store a newly created image in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Image::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Image::create($data);

		return Redirect::route('images.index');
	}

	/**
	 * Display the specified image.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$image = Image::findOrFail($id);

		return View::make('images.show', compact('image'));
	}

	/**
	 * Show the form for editing the specified image.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$image = Image::find($id);

		return View::make('images.edit', compact('image'));
	}

	/**
	 * Update the specified image in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$image = Image::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Image::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$image->update($data);

		return Redirect::route('images.index');
	}

	/**
	 * Remove the specified image from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Image::destroy($id);

		return Redirect::route('images.index');
	}

}
