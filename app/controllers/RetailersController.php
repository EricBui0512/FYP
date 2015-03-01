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
     * Users settings page
     *
     * @return View
     */
    public function getDashboard()
    {
        $user = Auth::user();    
        return View::make('site.layouts.retailer', compact('user'));
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
        $outlets = Outlet::owner()->lists('name', 'id');

		return View::make('site.services.create', compact('outlets'));
	}

	/**
	 * Store a newly created service in storage.
	 *
	 * @return Response
	 */
	public function storeService()
	{

		$detail = Input::only('highlights','summary');

		$condition = Input::only('special_condition','condition1','condition2');
		$data = Input::except('highlights','special_condition','condition1','condition2');

		$validator = Validator::make( $data, Service::$rules );

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		// create detail service
		$serviceDetail = ServiceDetail::create( $detail );

		// create condition service
		$serviceCondition = ServiceCondition::create( $condition );

		$data['detail_id'] = $serviceDetail->id;
		$data['condition_id'] = $serviceCondition->id;

		unset( $data['summary']);

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
     * Display a listing of services
     *
     * @return Response
     */
    public function listDeal()
    {
        $deals = Deal::owner();

        return View::make('site.deals.index', compact('deals'));
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

        Deal::create($data);

        return Redirect::route('deal.index');
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

        return View::make('site.deals.edit', compact('deal'));
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

        $deal->update($data);

        return Redirect::route('deal.index');
    }

    /**
     * Remove the specified service from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroyDeal($id)
    {
        Deal::destroy($id);

        return Redirect::route('deal.index');
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
        $cities = array( '0' => 'All' );
        // Show the page
        return View::make('admin/addresses/index', compact('title','countries','cities'));
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

        $countries = array_merge( array( '0' => '' ), Country::lists('country','id'));
        $cities = array_merge( array( '0' => '' ), City::lists('city','id'));

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
            $inputs = Input::except('csrf_token');

            $this->address->city_id = $inputs['city_id'];
            $this->address->district = $inputs['district'];
            $this->address->address = $inputs['address'];
            $this->address->postal_code = $inputs['postal_code'];

            $this->address->save();

            // Was the role created?
            if ($this->address->id)
            {
                // Redirect to the new role page
                return Redirect::to('admin/addresses/' . $this->address->id . '/edit')->with('success', Lang::get('admin/addresses/messages.create.success'));
            }

            // Redirect to the new country page
            return Redirect::to('admin/addresses/create')->with('error', Lang::get('admin/addresses/messages.create.error'));

            // Redirect to the country create page
            return Redirect::to('admin/addresses/create')->withInput()->with('error', Lang::get('admin/addresses/messages.' . $error));
        }

        // Form validation failed
        return Redirect::to('admin/addresses/create')->withInput()->withErrors($validator);
    }


    /**
     * Show the form for editing the specified country.
     *
     * @param  int  $id
     * @return Response
     */
    public function editAddress($address)
    {
        if ( ! empty( $address ) )
        {
            $countries = array_merge( array( '0' => '' ), Country::lists('country','id'));
            $cities = array_merge( array( '0' => '' ), City::lists('city','id'));
            
            // Title
            $title = Lang::get('admin/addresses/title.address_update');
            // mode
            $mode = 'edit';

            return View::make('admin/addresses/create_edit', compact('city', 'title', 'mode', 'countries', 'cities', 'address'));
        }
        else
        {
            return Redirect::to('admin/addresses')->with('error', Lang::get('admin/addresses/messages.does_not_exist'));
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
        $validator = Validator::make(Input::all(), City::$rules);

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
                return Redirect::to('admin/addresses/' . $address->id . '/edit')->with('success', Lang::get('admin/addresses/messages.update.success'));
            }
            else
            {
                // Redirect to the role page
                return Redirect::to('admin/cities/' . $address->id . '/edit')->with('error', Lang::get('admin/cities/messages.update.error'));
            }
        }

        // Form validation failed
        return Redirect::to('admin/cities/' . $address->id . '/edit')->withInput()->withErrors($validator);
    }

    /**
     * Remove user page.
     *
     * @param $role
     * @return Response
     */
    public function deleteAddress($address)
    {
        // Title
        $title = 'Delete Address';

        // Show the page
        return View::make('admin/addresses/delete', compact('address', 'title'));
    }

    /**
     * Remove the specified user from storage.
     *
     * @param $role
     * @internal param $id
     * @return Response
     */
    public function destroyAddress( $address )
    {
        // Was the role deleted?
        if ( $address->delete() )
        {
            // Redirect to the role management page
            return Redirect::to('admin/addresses')->with('success', Lang::get('admin/addresses/messages.delete.success'));
        }

        // There was a problem deleting the role
        return Redirect::to('admin/addresses')->with('error', Lang::get('admin/addresses/messages.delete.error'));
    }

    /**
     * Show a list of all the cities formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function getAddresses( $countryId = 0, $cityId = 0 )
    {
        $fields = array('addresses.id', 'address', 'district', 'postal_code', 'addresses.created_at', 'addresses.updated_at');

        $query = Address::select( $fields );

        if ( $countryId )
        {
            $query = $query->byCountry( $countryId );
        }

        if ( $cityId )
        {
            $query = $query->byCity( $cityId );
        }

        $addresses = $query->orderBy( 'city_id');
        
        return Datatables::of($addresses)
        // ->edit_column('created_at','{{{ Carbon::now()->diffForHumans(Carbon::createFromFormat(\'Y-m-d H\', $test)) }}}')

        ->add_column('actions', '<a href="{{{ URL::to(\'admin/addresses/\' . $id . \'/edit\' ) }}}" class="iframe btn btn-xs btn-default">{{{ Lang::get(\'button.edit\') }}}</a>
                                <a href="{{{ URL::to(\'admin/addresses/\' . $id . \'/delete\' ) }}}" class="iframe btn btn-xs btn-danger">{{{ Lang::get(\'button.delete\') }}}</a>
            ')

        ->remove_column('id')

        ->make();
    }

    public function getHtmlCity( $countryId ) {

        $cities = array_merge(array( '0' => 'All' ), City::ByCountry( $countryId )->lists('city', 'id'));

        return View::make( 'admin/cities/_city', compact('cities'));
    }

}
