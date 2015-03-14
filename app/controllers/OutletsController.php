<?php

class OutletsController extends \BaseController {

	protected $adminId = null;

	public function __construct()
	{

		parent::__construct();

		$this->adminId = Auth::id();
	}

	/**
	 * Show the form for creating a new outlet
	 *
	 * @return Response
	 */
	public function create()
	{
		$outObj = new Outlet();
		$tmpId = $outObj->createTmp();

		return Redirect::to( "outlet/$tmpId/edit" )->with('title', Lang::get('site/outlets/title.create_a_new_outlet'));
	}

	/**
	 * Display the specified outlet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$outlet = Outlet::findOrFail($id);

		return View::make('site.outlets.show', compact('outlet'));
	}

	/**
	 * Display the specified outlet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getList()
	{
		$outlets = Outlet::owner()->active()->paginate(10);
		$title = Lang::get('site/outlets/title.outlet_management');

		return View::make('site.outlets.index', compact('outlets', 'title'));
	}

	/**
	 * Show the form for editing the specified outlet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit( $outlet )
	{
		$title = Session::get('title');
		$countries = Country::lists('country','id');
		$cities = City::lists('city','id');
		$retailers = Retailer::owner()->lists('name', 'id');
		$addresses = Address::select(array('addresses.id', 'addresses.address'))->lists('address',  'id');
		$images = Picture::getByRefId( $outlet->id, 'outlet');

		if ( ! $title )
		{
			$title = Lang::get('site/outlets/title.outlet_update');
		}
		else
		{
			Session::forget('title');
		}

		return View::make('site.outlets.edit',compact('countries','cities', 'outlet', 'title', 'retailers', 'addresses'))
			->nest('imageForm', 'site.partials.image.create', ['refId' => $outlet->id, 'type' => 'outlet', 'images' => $images]);

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
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if ($outlet->description_id)
		{
			$desc = OutletDescription::where('id', $outlet->description_id)->update($description);
		}
		else
		{
			$desc = OutletDescription::create( $description );
		}

		$addressData = array( 'city_id' => $data['city_id'], 'address' => $data['address']);
		
		if ( $outlet->address_id )
		{
			$address = Address::where( 'id', $outlet->address_id )->update( $addressData );
		}
		else
		{
			$address = Address::create( $addressData );
		}
		
		unset( $data['full_description'] );
		unset( $data['address']);

		$data['description_id'] = $desc->id;
		$data['address_id'] = $address->id;
		$data['status'] = 'active';

		if ( $outlet->update($data) )
		{
			return Redirect::to('outlet')->with('success', Lang::get('site/outlets/messages.update.success'));
		}

		return Redirect::route('outlet.edit')->with('error', Lang::get('site/outlets/messages.update.error'));
		
	}

	public function uploadimage()
	{
		$picture = array();
		$files   = Input::file('images');	
		
		$strRand = strtolower(str_random(20));
		$array[0] = $files;
		$extension = $array[0]->getClientOriginalExtension();	   
		$fileName = $strRand.'.' . $extension;
	    
	    $uploadPath = 'upload';

	    $picture['image_path'] = $uploadPath . '/normal/' . $fileName;
	    $picture['big_path'] =  $uploadPath . '/big/' . $fileName;
	    $picture['thumbnail_path'] =  $uploadPath . '/thumbnail/' . $fileName;
	    $picture['image_type'] = Input::get('type');
	    $picture['ref_id'] = Input::get('ref_id');

	    Image::make($files->getRealPath())->resize(480,480)->save( $picture['big_path'] );
	    Image::make($files->getRealPath())->resize(308,308)->save( $picture['image_path'] );
	    Image::make($files->getRealPath())->resize(64, 64)->save( $picture['thumbnail_path'] );
		
		Picture::create( $picture );

		return json_encode($picture);
	}

	public function deleteImage()
	{
		$id = Input::get('id');
		$normal = Input::get('normal');
		$thumb = Input::get('thumb');

		Picture::destroy( $id );
	}
	/**
	 * Remove the specified outlet from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if ( Outlet::destroy($id) )
		{
			return Redirect::route('outlets.index')->with('success', Lang::get('site/outlets/messages.delete.success'));
		}

		return Redirect::route('outlet.index')->with('error', Lang::get('site/outlets/messages.delete.error'));

	}

	public function listTranByDeal( $id )
	{
		$trans = DealTransaction::byDeal( $id );
		$deal = Deal::find( $id );

		return View::make( 'site.transactions.index', compact('trans', 'deal'));
	}
}
