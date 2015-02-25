<?php
/**
 * @Author: Dung Ho
 * @Date:   2015-02-25 22:47:44
 * @Last Modified by:   Dung Ho
 * @Last Modified time: 2015-02-25 23:38:08
 */
class AdminCommonController extends AdminController {

	/**
     * Country Model
     * @var Country
     */
    protected $country;

    /**
     * Inject the models.
     * @param Post $post
     */
    public function __construct(Country $country)
    {
        parent::__construct();
        $this->country = $country;
    }

	/**
	 * Display a listing of countries
	 *
	 * @return Response
	 */
    public function getIndex()
    {
        // Title
        $title = 'Country Manager';

        // Grab all the blog posts
        $countries = $this->country;

        // Show the page
        return View::make('admin/countries/index', compact('countries', 'title'));
    }


	/**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCountryCreate()
    {

        // Title
        $title = 'Create a new country';

        // Show the page
        return View::make('admin/countries/create_edit', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function postCountryCreate()
    {

        // Declare the rules for the form validation
        $rules = array(
            'country' => 'required'
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);
        // Check if the form validates with success
        if ($validator->passes())
        {
  	    // Get the inputs, with some exceptions
            $inputs = Input::except('csrf_token');

            $this->country->country = $inputs['country'];
            $this->country->save();

            // Was the role created?
            if ($this->country->id)
            {
                // Redirect to the new role page
                return Redirect::to('admin/countries/' . $this->country->id . '/edit')->with('success', Lang::get('admin/countries/messages.create.success'));
            }

            // Redirect to the new country page
            return Redirect::to('admin/countries/create')->with('error', Lang::get('admin/countries/messages.create.error'));

            // Redirect to the country create page
            return Redirect::to('admin/countries/create')->withInput()->with('error', Lang::get('admin/countries/messages.' . $error));
        }

        // Form validation failed
        return Redirect::to('admin/countries/create')->withInput()->withErrors($validator);
    }


	/**
	 * Show the form for editing the specified country.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getCountryEdit($country)
    {
        if ( ! empty( $country ) )
        {
            // Title
        	$title = Lang::get('admin/countries/title.country_update');
        	// mode
        	$mode = 'edit';

        	return View::make('admin/countries/create_edit', compact('country', 'title', 'mode'));
        }
        else
        {
            return Redirect::to('admin/countries')->with('error', Lang::get('admin/countries/messages.does_not_exist'));
        }
    }

	/**
	 * Update the specified country in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postCountryEdit($country)
    {
        // Declare the rules for the form validation
        $rules = array(
            'country' => 'required'
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            // Update the role data
            $country->country = Input::get('country');

            // Was the role updated?
            if ($country->save())
            {
                // Redirect to the role page
                return Redirect::to('admin/countries/' . $country->id . '/edit')->with('success', Lang::get('admin/countries/messages.update.success'));
            }
            else
            {
                // Redirect to the role page
                return Redirect::to('admin/countries/' . $country->id . '/edit')->with('error', Lang::get('admin/countries/messages.update.error'));
            }
        }

        // Form validation failed
        return Redirect::to('admin/countries/' . $country->id . '/edit')->withInput()->withErrors($validator);
    }

	/**
     * Remove user page.
     *
     * @param $role
     * @return Response
     */
    public function getCountryDelete($country)
    {
        // Title
        $title = Lang::get('admin/countries/title.country_delete');

        // Show the page
        return View::make('admin/countries/delete', compact('country', 'title'));
    }

    /**
     * Remove the specified user from storage.
     *
     * @param $role
     * @internal param $id
     * @return Response
     */
    public function postCountryDelete($country)
    {
            // Was the role deleted?
            if($country->delete()) {
                // Redirect to the role management page
                return Redirect::to('admin/countries')->with('success', Lang::get('admin/countries/messages.delete.success'));
            }

            // There was a problem deleting the role
            return Redirect::to('admin/countries')->with('error', Lang::get('admin/countries/messages.delete.error'));
    }

	/**
     * Show a list of all the countries formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function getCountryData()
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

    
}