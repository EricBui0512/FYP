<?php

class OutletsController extends \BaseController {

	protected $adminId = null;
	protected $dealRepo;

	public function __construct(IDealRepository $dealRepo)
	{

		parent::__construct();

		$this->adminId = Auth::id();
		$this->dealRepo = $dealRepo;
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

		return Redirect::to( "outlet/$tmpId/edit" );
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
		$countries = Country::lists('country','id');
		$cities = City::where('country_id', Country::DEFAULT_COUNTRY)->lists('city','id');
		$retailers = Retailer::owner()->lists('name', 'id');
		$addresses = Address::select(array('addresses.id', 'addresses.address'))->lists('address',  'id');
		$images = Picture::getByRefId( $outlet->id, 'outlet');

		if ( $outlet->status == 'active')
		{
			$title = Lang::get('site/outlets/title.outlet_update');
		}
		else
		{
			$title = Lang::get('site/outlets/title.create_a_new_outlet');
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
		
		$result = Picture::create( $picture );

		$picture['id'] = $result->id;

		return json_encode($picture);
	}

	public function deleteImage()
	{
		$id = Input::get('id');
		$normal = Input::get('normal');
		$thumb = Input::get('thumb');

		echo json_encode(Picture::destroy( $id ));
	}
	/**
	 * Remove the specified outlet from storage.
	 *
	 * @return Response
	 */
	public function destroy()
	{

		$id = Input::get('id');

		if (Outlet::destroy($id))
        {
            echo json_encode( array('code' => 0, 'messages' =>  Lang::get('site/outlets/messages.delete.success') ));
        }
        else
        {
            echo json_encode( array('code' => 1, 'messages' => Lang::get('site/outlets/messages.delete.error') ));
        }
	}

	public function listTranByDeal( $id )
	{
		$trans = DealTransaction::byDeal( $id );
		$deal = Deal::find( $id );

		return View::make( 'site.transactions.index', compact('trans', 'deal'));
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


    /**
     * Display a listing of services
     *
     * @return Response
     */
    public function listDeal()
    {
        $title = 'Deals Manage';
        $deals = Deal::owner()->paginate(10);

        return View::make('site.deals.index', compact('deals','title'));
    }

    /**
     * Show the form for creating a new service
     *
     * @return Response
     */
    public function createDeal()
    {

        $services = Service::select(array('services.name','services.id'))->owner()->lists('name','id');
        $dealType = array(
        		DealRepository::DEAL_TYPE_HOT_DEAL => DealRepository::DEAL_TYPE_HOT_DEAL,
        		DealRepository::DEAL_TYPE_SERVICE => DealRepository::DEAL_TYPE_SERVICE
        	);

        return View::make('site.deals.create', compact('services', 'dealType'));
    }

    /**
     * Store a newly created service in storage.
     *
     * @return Response
     */
    public function storeDeal()
    {

        $validator = Validator::make( $data = Input::all(), Deal::$rules );
        
        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        if (Deal::create($data))
        {
            return Redirect::route('deal.index')->with('success', Lang::get('site/deals/messages.create.success'));
        }

        return Redirect::route('deal.index')->with('error', Lang::get('site/deals/messages.create.error'));
    }


    /**
     * Show the form for editing the specified service.
     *
     * @param  int  $id
     * @return Response
     */
    public function editDeal($id)
    {
        $deal = Deal::find($id);
        $services = Service::select(array('services.name','services.id'))->owner()->lists('name','id');
        $dealType = array(
        		DealRepository::DEAL_TYPE_HOT_DEAL => DealRepository::DEAL_TYPE_HOT_DEAL,
        		DealRepository::DEAL_TYPE_SERVICE => DealRepository::DEAL_TYPE_SERVICE
        	);

        return View::make('site.deals.edit', compact('deal', 'services', 'dealType'));
    }

    /**
     * Update the specified service in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function updateDeal($id)
    {
        $deal = Deal::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Deal::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        if ( $deal->update($data) )
        {
            return Redirect::route('deal.index')->with('success', Lang::get('site/deals/messages.update.success'));
        }

        return Redirect::route('deal.index')->with('error', Lang::get('site/deals/messages.update.error'));
    }

    /**
     * Remove the specified service from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroyDeal()
    {
    	$id = Input::get('id');

		if (Deal::destroy($id))
        {
            echo json_encode( array('code' => 0, 'messages' =>  Lang::get('site/deals/messages.delete.success') ));
        }
        else
        {
            echo json_encode( array('code' => 1, 'messages' => Lang::get('site/deals/messages.delete.error') ));
        }
    }

    public function cancellationDeal()
    {
    	$title = 'Cancellation Deal';
        $deals = DealTransaction::cancellation();

        return View::make('site.deals.cancellation', compact('deals','title'));
    }

    // public function getChartsData( $type )
    // {
        
    //     $chats = array(
    //             array( 'category' => '27/02', 'value' => 1),
    //             array( 'category' => '28/02', 'value' => 2),
    //             array( 'category' => '01/03', 'value' => 4),
    //             array( 'category' => '02/03', 'value' => 6),
    //             array( 'category' => '03/03', 'value' => 7),
    //             array( 'category' => '04/03', 'value' => 8),
    //             array( 'category' => '05/03', 'value' => 2),
    //             array( 'category' => '06/03', 'value' => 8),
    //             array( 'category' => '07/03', 'value' => 26),
    //             array( 'category' => '08/03', 'value' => 17),
    //             array( 'category' => '09/03', 'value' => 2),
    //             array( 'category' => '10/03', 'value' => 2),
    //             array( 'category' => '11/03', 'value' => 13),
    //             array( 'category' => '12/03', 'value' => 34),
    //             array( 'category' => '13/03', 'value' => 1),
    //             array( 'category' => '14/03', 'value' => 20),
    //         );

    //     if ( $type == 'week' ) {
    //         $chats = array(
    //             array( 'category' => 'week 1 - 02', 'value' => 3),
    //             array( 'category' => 'week 2 - 02', 'value' => 3),
    //             array( 'category' => 'week 3 - 02', 'value' => 12),
    //             array( 'category' => 'week 4 - 02', 'value' => 33),
    //             array( 'category' => 'week 1 - 03', 'value' => 43),
    //             array( 'category' => 'week 2 - 03', 'value' => 53),
    //         );
    //     }
    //     else if ( $type == 'month') {

    //     	$chats = array(
    //             array( 'category' => '02/2015', 'value' => 3),
    //             array( 'category' => '03/2015', 'value' => 147),
    //         );
    //     }
    //     echo json_encode($chats);
    // }
}
