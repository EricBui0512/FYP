<?php

class SiteController extends BaseController {

    /**
     * User Model
     * @var User
     */
    protected $user;

    /**
     * Inject the models.
     * @param Post $post
     * @param User $user
     */
    public function __construct(User $user)
    {
        parent::__construct();

        $this->user = $user;
    }
    
	/**
	 * Returns all the blog posts.
	 *
	 * @return View
	 */
	public function getIndex()
	{
        // get list outlet active
		$outlets = Outlet::active();
		
        // Show the page
		return View::make('site/homelayout',compact('outlets'));
	}

    public function postSearch() {


    }

    public function postGetCities(){
        $country_id = Input::get('country_id');
        $cities = City::where('country_id','=',$country_id)->get();
        $data_string = "";
        foreach ($cities as $item) {
            $data_string.="<option value='$item->id'>$item->city</option>";
        }
        return $data_string;
    }
}
