<?php
/**
 * @Author: Dung Ho
 * @Date:   2015-02-25 23:17:58
 * @Last Modified by:   Dung Ho
 * @Last Modified time: 2015-04-28 22:26:12
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

		$retailer = Retailer::findOne( $id );

		$countries = Country::lists('country', 'id' );
		$cities = City::where( 'country_id', $retailer->country_id )->lists('city', 'id');
		$addresses = Address::where( 'city_id', $retailer->city_id )->lists('address', 'id');

		$cats = BusinessCategory::lists( 'name', 'id');
		return View::make('admin.retailers.edit', compact('retailer', 'cats', 'title', 'countries', 'cities','addresses'));
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
		$countries = Country::lists('country', 'id' );
		$cities = City::where( 'country_id', $retailer->country_id )->lists('city', 'id');
		$addresses = Address::where( 'city_id', $retailer->city_id )->lists('address', 'id');

		$cats = BusinessCategory::lists( 'name', 'id');
		return Redirect::to('admin/retailers/' . $retailer->id . '/edit')->with('success','Update retailer');
	}
	public function delete( $id )
    {
    	$retailer = Retailer::find($id);
        
        // Title
        $title = 'Delete this outlet will delete outlet relate.';

        // Show the page
        return View::make('admin/retailers/delete', compact('retailer', 'title'));
    }
	/**
	 * Remove the specified outlet from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$outlets = Outlet::where('retailer_id', $id)->get();
		Outlet::destroy($outlets);
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

    	$services = Service::all();

    	$outlets = Outlet::lists( 'name', 'id' );

    	return View::make( 'admin.services.index', compact('title', 'outlets', 'services'));
    }

    /**
	 * Show the form for editing the specified outlet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editService( $service )
	{
		$title = 'Edit Service';

		$outlets = Outlet::lists( 'name', 'id' );
		$images = Picture::getByRefId( $service->id, 'service');

		return View::make('admin.services.edit', compact('service', 'outlets', 'title'))
            ->nest('imageForm', 'site.partials.image.create', ['refId' => $service->id, 'type' => 'service', 'images' => $images]);

		// return View::make('admin.services.edit', compact('service', 'title', 'outlets' ));
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

		$detail = Input::only('highlights','summary');
		$condition = Input::only('special_condition','condition1','condition2');
		$data = Input::except('highlights','summary','special_condition','condition1','condition2');

		$validator = Validator::make($data, Service::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		ServiceDetail::where('id', (int)$data['detail_id'])->update( $detail );
		ServiceCondition::where('id', (int)$data['condition_id'])->update( $condition );

		$service->update($data);

		return Redirect::route('admin.services.index');
	}

	public function deleteService($service)
    {
        // Title
        $title = 'Delete a service';

        // Show the page
        return View::make('admin/services/delete', compact('service', 'title'));
    }

	/**
	 * Remove the specified outlet from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroyService($service)
	{

		$deals = Deal::where('service_id', $service->id)->get();

		if ( ! empty($deals)) {
			$dealIds = [];
			foreach ($deals as $key => $deal) {
				array_push( $dealIds, $deal->id);
			}

			DealTransaction::whereIn('deal_id', $dealIds)->delete();

			Deal::whereIn('id', $dealIds)->delete();
		}
		$service->delete();

		return Redirect::to('admin/services');
	}

	/**
     * Show a list of all the services formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function getDataService( )
    {
        $services = Service::select(array('id','name','price','status','time_operate', 'created_at', 'updated_at'))
        	->where('status', 'active');

        // if ( $outletId )
        // {
        // 	$services->where( 'outlet_id', $outletId );
        // }

        return Datatables::of($services)

	        // ->edit_column('active','{{{ $active ? "Yes":"No" }}}')

	        ->add_column('actions', '<a href="{{{ URL::to(\'admin/services/\' . $id . \'/edit\' ) }}}" class="iframe btn btn-xs btn-default">{{{ Lang::get(\'button.edit\') }}}</a>
	                                <a href="{{{ URL::to(\'admin/services/\' . $id . \'/delete\' ) }}}" class="iframe btn btn-xs btn-danger">{{{ Lang::get(\'button.delete\') }}}</a>
	            ')

	        ->remove_column('id')

	        ->make();
    }

    public function listDeal() {

    	$title = 'Manage Deal';

    	return View::make( 'admin.deals.index', compact('title'));
    }

    /**
	 * Show the form for editing the specified deal.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editDeal( $id )
	{
		$title = 'Edit Deal';

		$deal = Deal::find( $id );

		$services = Service::select(array('services.name','services.id'))->lists('name','id');

        return View::make('admin.deals.edit', compact('deal', 'services', 'title'));

	}

    public function getDataDeal( )
    {
        $deals = Deal::select(array('id','title','amount','discount', 'featured','status',
        	DB::raw('date_format(time_slot,"%m/%d/%Y") AS time_slot')));

        // if ( $outletId )
        // {
        // 	$services->where( 'outlet_id', $outletId );
        // }

        return Datatables::of($deals)

	        ->edit_column('featured','{{{ $featured == 1 ? "Yes":"No" }}}')

	        ->add_column('actions', '<a href="{{{ URL::to(\'admin/deals/\' . $id . \'/edit\' ) }}}" class="iframe btn btn-xs btn-default">{{{ Lang::get(\'button.edit\') }}}</a>
	                                <a href="{{{ URL::to(\'admin/deals/\' . $id . \'/delete\' ) }}}" class="iframe btn btn-xs btn-danger">{{{ Lang::get(\'button.delete\') }}}</a>
	                                <a href="javascript:void(0)" id="{{{ $id }}}" class="btn btn-xs btn-success active {{{ $status==\'active\'? \'disabled\':\'\'}}}">Active</a>
	                                <a href="javascript:void(0)" id="{{{ $id }}}" class="btn btn-xs btn-primary featured {{{ $featured==1? \'disabled\':\'\'}}}">Featured</a>
	            ')

	        ->remove_column('id')

	        ->make();
    }

    public function activeDeal( $id )
    {
    	if ( Deal::where('id', $id)->update(array('status' => 'active')) )
    	{
    		echo json_encode(array('code' => 0, 'messages' => 'Successfully implemented'));
    	}
    	else
    	{
			echo json_encode(array('code' => 1, 'messages' => "Action not success"));
    	}
    }

    public function featuredDeal( $id )
    {
    	if ( Deal::where('id', $id)->update(array('featured' => '1')) )
    	{
    		echo json_encode(array('code' => 0, 'messages' => 'Successfully implemented'));
    	}
    	else
    	{
			echo json_encode(array('code' => 1, 'messages' => "Action not success"));
    	}
    }

    public function deleteDeal($id)
    {
        // Title
        $title = 'Delete a deal';

        // Show the page
        return View::make('admin/deals/delete', compact('id', 'title'));
    }

	/**
	 * Remove the specified outlet from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroyDeal($id)
	{
		DealTransaction::where('deal_id', $id)->delete();
		Deal::destroy( $id );

		return Redirect::to('admin/deals');
	}
}