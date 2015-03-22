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
    public function __construct(IUserRepository $user, IDealRepository $deal)
    {
        parent::__construct();

        $this->user = $user;
        $this->deal = $deal;
    }
    
	/**
	 * Returns all the blog posts.
	 *
	 * @return View
	 */
	public function getIndex()
	{
        // get list outlet active
		$hotDeals = $this->deal->hotDeal();
        $deals = $this->deal->search();
        // Show the page
		return View::make('site/homelayout',compact('hotDeals', 'deals'));
	}

    public function getSearch() {
        $search = true;
        $category=Input::get('category');
        $country=Input::get('country');
        $city=Input::get('city');
        $deals=$this->deal->search($category,$country,$city);
        // Show the page
        return View::make('site.homelayout',compact('deals', 'search'));
    }

    public function getDetail($id) {
        $deal_id=$id;
        $detail=$this->deal->detail($id);
        // Show the page
        return View::make('site.deals.show',compact('detail','deal_id'));
    }

    public function postGetCities(){
        $country_id = Input::get('country_id');
        $cities = City::where('country_id','=',$country_id)->get();
        $data_string = "<option value='0'>All</option>";
        foreach ($cities as $item) {
            $data_string.="<option value='$item->id'>$item->city</option>";
        }
        return $data_string;
    }
}
