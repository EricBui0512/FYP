<?php
/**
 * @Author: Dung Ho
 * @Date:   2015-02-25 23:17:58
 * @Last Modified by:   Dung Ho
 * @Last Modified time: 2015-02-28 17:16:09
 */
class AdminRetailerController extends AdminController {
	
	/**
	 * Display a listing of retailers
	 *
	 * @return Response
	 */
	public function index()
	{
		$title = 'Manager Retailer';

		$cats = BusinessCategory::all();

		return View::make('admin.retailers.index', compact('title', 'cats'));
	}

	/**
	 * Show the form for editing the specified outlet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$title = 'Edit Retailer';

		$retailer = Retailer::getFull();

		$countries = Country::lists('country', 'id' );
		$cities = City::where( 'country_id', $retailer->country_id )->lists('city', 'id');

		$cats = BusinessCategory::lists( 'name', 'id');

		return View::make('admin.retailers.edit', compact('retailer', 'cats', 'title', 'countries', 'cities'));
	}

	/**
	 * Update the specified outlet in storage.
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

		return Redirect::route('admin.retailers.index');
	}

	/**
	 * Remove the specified outlet from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Retailer::destroy($id);

		return Redirect::route('admin.retailers.index');
	}

	/**
     * Show a list of all the retailers formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function getData()
    {
        $retailers = Retailer::select(array('retailers.name' , 'retailers.id', 'addresses.address','company_register_id', 'business_categories.name AS category',
        				 'retailers.website',  'retailers.created_at'))
        			->leftJoin('addresses', 'addresses.id', '=', 'retailers.address_id')
        			->leftJoin('business_categories', 'business_categories.id', '=', 'retailers.category_id');

        return Datatables::of($retailers)
        // ->edit_column('created_at','{{{ Carbon::now()->diffForHumans(Carbon::createFromFormat(\'Y-m-d H\', $test)) }}}')

        ->add_column('actions', '<a href="{{{ URL::to(\'admin/retailers/\' . $id . \'/edit\' ) }}}" class="iframe btn btn-xs btn-default">{{{ Lang::get(\'button.edit\') }}}</a>
                                <a href="{{{ URL::to(\'admin/retailers/\' . $id . \'/delete\' ) }}}" class="iframe btn btn-xs btn-danger">{{{ Lang::get(\'button.delete\') }}}</a>
            ')

        ->remove_column('id')

        ->make();
    }

    public function listService() {

    	$title = 'Manage Service';

    	$outlets = Outlet::owner();

    	return View::make( 'admin.services.index', compact('title', 'outlets'));
    }

    /**
	 * Show the form for editing the specified outlet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editService($id)
	{
		$title = 'Edit Service';

		$service = Service::find($id);

		return View::make('admin.services.edit', compact('service', 'title'));
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

		return Redirect::route('admin.services.index');
	}

	/**
	 * Remove the specified outlet from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroyService($id)
	{
		Service::destroy($id);

		return Redirect::route('admin.services.index');
	}

	/**
     * Show a list of all the services formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function getDataService()
    {
        $services = Retailer::select(array('retailers.id', 'addresses.address', 'business_categories.name AS category', 'retailers.name',
        				'company_register_id', 'retailers.website',  'retailers.created_at', 'retailers.updated_at'))
        			->leftJoin('addresses', 'addresses.id', '=', 'retailers.address_id')
        			->leftJoin('business_categories', 'business_categories.id', '=', 'retailers.category_id');

        return Datatables::of($retailers)
        // ->edit_column('created_at','{{{ Carbon::now()->diffForHumans(Carbon::createFromFormat(\'Y-m-d H\', $test)) }}}')

        ->add_column('actions', '<a href="{{{ URL::to(\'admin/retailers/\' . $id . \'/edit\' ) }}}" class="iframe btn btn-xs btn-default">{{{ Lang::get(\'button.edit\') }}}</a>
                                <a href="{{{ URL::to(\'admin/retailers/\' . $id . \'/delete\' ) }}}" class="iframe btn btn-xs btn-danger">{{{ Lang::get(\'button.delete\') }}}</a>
            ')

        ->remove_column('id')

        ->make();
    }
}