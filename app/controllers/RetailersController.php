<?php

class RetailersController extends \BaseController {

	protected $adminId = null;

	public function __construct()
	{

		parent::__construct();

		$this->adminId = Auth::id();
	}

	/**
	 * Display a listing of retailers
	 *
	 * @return Response
	 */
	public function index()
	{
		$retailers = Retailer::owner()->get();

		return View::make('site.retailers.index', compact('retailers'));
	}

	/**
	 * Show the form for creating a new retailer
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('site.retailers.create');
	}

	/**
	 * Store a newly created retailer in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make( $data = Input::all(), Retailer::$rules );

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['admin_id'] = $this->adminId;

		Retailer::create($data);

		return Redirect::route('retailer.index');
	}

	/**
	 * Display the specified retailer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$retailer = Retailer::findOrFail($id);

		return View::make('site.retailers.show', compact('retailer'));
	}

	/**
	 * Show the form for editing the specified retailer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$retailer = Retailer::find($id);

		return View::make('site.retailers.edit', compact('retailer'));
	}

	/**
	 * Update the specified retailer in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$retailer = Retailer::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Retailer::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$retailer->update($data);

		return Redirect::route('retailer.index');
	}

	/**
	 * Remove the specified retailer from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Retailer::destroy($id);

		return Redirect::route('retailer.index');
	}

	/**
	 * Display a listing of services
	 *
	 * @return Response
	 */
	public function listService()
	{
		$services = Service::owner()->get();

		return View::make('site.services.index', compact('services'));
	}

	/**
	 * Show the form for creating a new service
	 *
	 * @return Response
	 */
	public function createService()
	{
		return View::make('site.services.create');
	}

	/**
	 * Store a newly created service in storage.
	 *
	 * @return Response
	 */
	public function storeService()
	{

		$validator = Validator::make( $data = Input::all(), Service::$rules );

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['admin_id'] = $this->adminId;

		Service::create($data);

		return Redirect::route('service.index');
	}

	/**
	 * Display the specified service.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showService($id)
	{
		$service = Service::findOrFail($id);

		return View::make('site.services.show', compact('service'));
	}

	/**
	 * Show the form for editing the specified service.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editService($id)
	{
		$service = Service::find($id);

		return View::make('site.services.edit', compact('service'));
	}

	/**
	 * Update the specified service in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updateService($id)
	{
		$service = Service::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Service::$rules);

		if ($validator->fails())
		{

			return Redirect::back()->withErrors($validator)->withInput();
		}

		$service->update($data);

		return Redirect::route('service.index');
	}

	/**
	 * Remove the specified service from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroyService($id)
	{
		Service::destroy($id);

		return Redirect::route('service.index');
	}

	/**
	 * Remove the specified service from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function createDeals()
	{
		return View::make('site.deals.create');
	}

}
