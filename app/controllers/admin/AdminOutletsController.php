<?php
/**
 * @Author: Dung Ho
 * @Date:   2015-02-25 23:06:32
 * @Last Modified by:   Dung Ho
 * @Last Modified time: 2015-03-24 23:22:46
 */

class AdminOutletsController extends AdminController {
	
	/**
	 * Display a listing of outlets
	 *
	 * @return Response
	 */
	public function index()
	{
		$title = 'Manager Outlet';

		return View::make('admin.outlets.index', compact('title'));
	}


	/**
	 * Show the form for editing the specified outlet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($outlet)
	{
		$title = 'Edit outlet';

		$retailers = Retailer::lists('name','id');
		$countries = Country::lists('country','id');
		$cities = City::lists('city','id');
		$images = Picture::getByRefId( $outlet->id, 'outlet');

		$addresses = Address::getHtmlByOutlet( $outlet->address_id );

		return View::make('admin.outlets.edit', compact('outlet', 'retailers', 'addresses','title','cities','countries'))
			->nest('imageForm', 'site.partials.image.create', ['refId' => $outlet->id, 'type' => 'outlet', 'images' => $images]);;
	}

	/**
	 * Update the specified outlet in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($outlet)
	{

		$data = Input::except( 'summary' );
		$description = Input::only('full_description', 'summary');

		$validator = Validator::make($data = Input::all(), Outlet::$rules);

		if ($validator->fails())
		{
			var_dump($validator->messages());die;
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if ($outlet->description_id)
		{
			$desc = OutletDescription::where('id', $outlet->description_id)->update($description);
		}
		else
		{
			$desc = OutletDescription::create( $description );
			$data['description_id'] = $desc->id;
		}

		$addressData = array( 'city_id' => $data['city_id'], 'address' => $data['address']);
		
		if ( $outlet->address_id )
		{
			$address = Address::where( 'id', $outlet->address_id )->update( $addressData );
		}
		else
		{
			$address = Address::create( $addressData );
			$data['address_id'] = $address->id;
		}
		
		unset( $data['full_description'] );
		unset( $data['address']);

		if ( $outlet->update($data) )
		{
			return Redirect::to('admin/outlets/' . $outlet->id . '/edit')->with('success', Lang::get('site/outlets/messages.update.success'));
		}

		return Redirect::to('admin/outlets/' . $outlet->id . '/edit')->with('error', Lang::get('site/outlets/messages.update.error'));

	}

	/**
	 * Remove the specified outlet from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Outlet::destroy($id);

		return Redirect::route('outlets.index');
	}

	/**
     * Show a list of all the outlets formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function getData()
    {

        $outlets = Outlet::select(array('id', 'name', 'outlet_register_id', 'website', 'operation_hour', 'rate', 'status', 'created_at', 'updated_at'))
        		->where('status', 'active');

        return Datatables::of($outlets)
        // ->edit_column('created_at','{{{ Carbon::now()->diffForHumans(Carbon::createFromFormat(\'Y-m-d H\', $test)) }}}')

        ->add_column('actions', '<a href="{{{ URL::to(\'admin/outlets/\' . $id . \'/edit\' ) }}}" class="iframe btn btn-xs btn-default">{{{ Lang::get(\'button.edit\') }}}</a>
                                <a href="{{{ URL::to(\'admin/outlets/\' . $id . \'/delete\' ) }}}" class="iframe btn btn-xs btn-danger">{{{ Lang::get(\'button.delete\') }}}</a>
            ')

        ->remove_column('id')

        ->make();
    }
}