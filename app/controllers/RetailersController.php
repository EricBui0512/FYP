<?php

class RetailersController extends \BaseController {

	protected $adminId = null;

    protected $address;

	public function __construct()
	{

		parent::__construct();

		$this->adminId = Auth::id();
        $this->address = new Address;
	}

	/**
	 * Display a listing of retailers
	 *
	 * @return Response
	 */
	public function index()
	{
        $title = Lng::get( 'site/retailers/title.retailer_management');

		$retailers = Retailer::owner()->get();

		return View::make('site.retailers.index', compact('retailers', 'title'));
	}

    /**
     * Users settings page
     *
     * @return View
     */
    public function getDashboard()
    {
        $user = Auth::user();
        $deals = Deal::dashboardDeal();

        return View::make('site.retailers.dashboard', compact('user', 'deals'));
    }

	/**
	 * Show the form for creating a new retailer
	 *
	 * @return Response
	 */
	public function create()
	{
        $title = Lang::get('site/retailers/title.create_a_new_retailer');

		return View::make('site.retailers.create', compact('title'));
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

		if ( Retailer::create($data) )
        {
            return Redirect::route('retailer.index')->with('success', Lang::get('site/retailers/messages.create.success'));
        }

        return Redirect::route('retailer.index')->with('error', Lang::get('site/retailers/messages.create.error'));
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
        $title = Lang::get('site/retailers/messages.title.retailer_update');

		$retailer = Retailer::find($id);

		return View::make('site.retailers.edit', compact('retailer', 'title'));
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

		if ( $retailer->update($data) )
        {
            return Redirect::route('retailer.index')->with('success', Lang::get('site/retailers/messages.update.success'));
        }

		return Redirect::route('retailer.edit')->with('error', Lang::get('site/retailers/messages.update.error'));
	}

	/**
	 * Remove the specified retailer from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if ( Retailer::destroy($id) )
        {
            return Redirect::route('retailer.index')->with('success', Lang::get('site/retailers/messages.delete.success'));
        }

		return Redirect::route('retailer.index')->with('error', Lang::get('site/retailers/messages.delete.error'));
	}

	/**
	 * Display a listing of services
	 *
	 * @return Response
	 */
	public function listService()
	{
        $title = Lang::get('site/services/title.service_management');
		$services = Service::select(array('services.*'))->active()->owner()->paginate(10);

		return View::make('site.services.index', compact('services', 'title'));
	}

	/**
	 * Show the form for creating a new service
	 *
	 * @return Response
	 */
	public function createService()
	{
        $service = new Service;
        $id = $service->createTmp();

        $title = Lang::get('site/services/title.create_a_new_service');

        return Redirect::to('service/' . $id . '/edit')->with('title', $title);
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
	public function editService($service)
	{
        $title = Lang::get('site/services/title.create_a_new_service');

        $outlets = Outlet::active()->owner()->lists('name', 'id');
        $images = Picture::getByRefId( $service->id, 'service');

		return View::make('site.services.edit', compact('service', 'outlets', 'title'))
            ->nest('imageForm', 'site.partials.image.create', ['refId' => $service->id, 'type' => 'service', 'images' => $images]);
	}

	/**
	 * Update the specified service in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updateService($service)
	{
		// $service = Service::findOrFail($id);

        $detail = Input::only('highlights','summary');

        $condition = Input::only('special_condition','condition1','condition2');
        $data = Input::except('highlights','special_condition','condition1','condition2');

        $validator = Validator::make( $data, Service::$rules );

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        // update detail service
        $serviceDetail = ServiceDetail::where('id', $service->detail_id)
                ->update( $detail );

        // create condition service
        $serviceCondition = ServiceCondition::where('id', $service->condition_id)
                ->update( $condition );

        unset( $data['summary']);

        if($service->update($data))
        {
            return Redirect::route('service.index')->with('success', Lang::get('site/services/messages.update.success'));
        }

        return Redirect::route('service.edit')->with('error', Lang::get('site/services/messages.update.error'));
	}

	/**
	 * Remove the specified service from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroyService($id)
	{
		if (Service::destroy($id))
        {
            return Redirect::route('service.index')->with('success', Lang::get('site/services/messages.delete.success'));
        }
        else
        {
		  return Redirect::route('service.index')->with('error', Lang::get('site/services/messages.delete.error'));
        }
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

        return View::make('site.deals.create', compact('services'));
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

        return View::make('site.deals.edit', compact('deal', 'services'));
    }

    /**
     * Update the specified service in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function updateDeal($id)
    {
        $deal = Deals::findOrFail($id);

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
    public function destroyDeal($id)
    {
        if (Deal::destroy($id))
        {
            return Redirect::route('deal.index')->with('success', Lang::get('site/deals/messages.delete.success'));
        }

        return Redirect::route('deal.index')->with('error', Lang::get('site/deals/messages.delete.error'));
    }
	/**
     * Show a list of all the countries formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function getCountries()
    {
        $countries = Country::select(array('id', 'country', 'created_at', 'updated_at'));

        return Datatables::of($countries)
        // ->edit_column('created_at','{{{ Carbon::now()->diffForHumans(Carbon::createFromFormat(\'Y-m-d H\', $test)) }}}')

        ->add_column('actions', '<a href="{{{ URL::to(\'admin/countries/\' . $id . \'/edit\' ) }}}" class="iframe btn btn-xs btn-default">{{{ Lang::get(\'button.edit\') }}}</a>
                                <a href="{{{ URL::to(\'admin/countries/\' . $id . \'/delete\' ) }}}" class="iframe btn btn-xs btn-danger">{{{ Lang::get(\'button.delete\') }}}</a>
            ')

        ->remove_column('id')

        ->make();
    }


    /**
     * Display a listing of countries
     *
     * @return Response
     */
    public function listCity()
    {
        // Title
        $title = 'City Manager';

        // Show the page
        return View::make('admin/cities/index', compact('title'));
    }

    /**
     * Show a list of all the cities formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function getCities()
    {

        $cities = City::select(array('id', 'city', 'created_at', 'updated_at'))->orderBy('country_id');

        return Datatables::of($cities)
        // ->edit_column('created_at','{{{ Carbon::now()->diffForHumans(Carbon::createFromFormat(\'Y-m-d H\', $test)) }}}')

        ->add_column('actions', '<a href="{{{ URL::to(\'admin/cities/\' . $id . \'/edit\' ) }}}" class="iframe btn btn-xs btn-default">{{{ Lang::get(\'button.edit\') }}}</a>
                                <a href="{{{ URL::to(\'admin/cities/\' . $id . \'/delete\' ) }}}" class="iframe btn btn-xs btn-danger">{{{ Lang::get(\'button.delete\') }}}</a>
            ')

        ->remove_column('id')

        ->make();
    }

    /**
     * Display a listing of countries
     *
     * @return Response
     */
    public function listAddress()
    {
        // Title
        $title = 'Address Manager';
        $countries = array_merge( array( '0' => 'All' ), Country::lists('country','id'));
        $cities = array( '' => 'All' );

        $addresses = Address::owner()->paginate(10);

        // Show the page
        return View::make('site/addresses/index', compact('title','countries','cities','addresses'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function createAddress()
    {

        // Title
        $title = 'Create a new address';

        $countries = array( null => '' ) + Country::lists('country','id');
        $cities = array( null => '' ) + City::lists('city','id');

        // Show the page
        return View::make('site.addresses.create_edit', compact('title', 'countries', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function storeAddress()
    {

        // Validate the inputs
        $validator = Validator::make(Input::all(), Address::$rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            // Get the inputs, with some exceptions
            $data = Input::except('csrf_token');

            if (Address::create( $data ))
            {
               // Redirect to the new country page
                return Redirect::to('address')->with('success', Lang::get('site/address/messages.create.success'));
            }

            // Redirect to the new country page
            return Redirect::to('address/create')->with('error', Lang::get('site/address/messages.create.error'));

        }

        // Form validation failed
        return Redirect::to('address/create')->withInput()->withErrors($validator);
    }


    /**
     * Show the form for editing the specified country.
     *
     * @param  int  $id
     * @return Response
     */
    public function editAddress($id)
    {
        $address = Address::find( $id );
        
        if ( ! empty( $address ) )
        {

            $countries = array( '' => '' ) + Country::lists('country','id');
            $cities = array( '' => '' ) + City::lists('city','id');
            
            // Title
            $title = Lang::get('site/addresses/title.address_update');
            
            // mode
            $mode = 'edit';

            return View::make('site/addresses/create_edit', compact( 'title', 'mode', 'countries', 'cities', 'address'));
        }
        else
        {
            return Redirect::to('site/addresses')->with('error', Lang::get('site/addresses/messages.does_not_exist'));
        }
    }

    /**
     * Update the specified city in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function updateAddress($address)
    {

        // Validate the inputs
        $validator = Validator::make(Input::all(), Address::$rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            // Get the inputs, with some exceptions
            $inputs = Input::except('csrf_token');

            $address->city_id = $inputs['city_id'];
            $address->district = $inputs['district'];
            $address->address = $inputs['address'];
            $address->postal_code = $inputs['postal_code'];

            // Was the role updated?
            if ($address->save())
            {
                // Redirect to the role page
                return Redirect::to('addresses/' . $address->id . '/edit')->with('success', Lang::get('site/addresses/messages.update.success'));
            }
            else
            {
                // Redirect to the role page
                return Redirect::to('cities/' . $address->id . '/edit')->with('error', Lang::get('site/cities/messages.update.error'));
            }
        }

        // Form validation failed
        return Redirect::to('cities/' . $address->id . '/edit')->withInput()->withErrors($validator);
    }

    /**
     * Remove user page.
     *
     * @param $role
     * @return Response
     */
    public function deleteAddress($id)
    {
        // Title
        $title = 'Delete Address';

        // Show the page
        return View::make('site/addresses/delete', compact('id', 'title'));
    }

    /**
     * Remove the specified user from storage.
     *
     * @param $role
     * @internal param $id
     * @return Response
     */
    public function destroyAddress( $id )
    {
        // Was the role deleted?
        if ( Address::destroy( $id ) )
        {
            // Redirect to the role management page
            return Redirect::to('addresses')->with('success', Lang::get('site/addresses/messages.delete.success'));
        }

        // There was a problem deleting the role
        return Redirect::to('addresses')->with('error', Lang::get('site/addresses/messages.delete.error'));
    }

    /**
     * Show a list of all the cities formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function getAddresses( $countryId = 0, $cityId = 0 )
    {
        $fields = array('id', 'address', 'district', 'postal_code', 'addresses.created_at', 'addresses.updated_at');

        $query = Address::select( $fields );

        if ( $countryId )
        {
            $query = $query->byCountry( $countryId );
        }

        if ( $cityId )
        {
            $query = $query->byCity( $cityId );
        }       
        $addresses = array_merge(array( '0' => 'All' ),$query->orderBy( 'city_id')->lists('address','id'));

        return $addresses;
    }

    public function getHtmlCity( $countryId ) {

        $cities = array_merge(array( '0' => 'All' ), City::ByCountry( $countryId )->lists('city', 'id'));

        return View::make( 'admin/cities/_city', compact('cities'));
    }

}
