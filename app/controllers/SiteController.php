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
		$hotDeals = $this->deal->hotDeals('Hot Deal');
        $serviceDeals = $this->deal->hotDeals('Service');
        // Show the page
		return View::make('site/homelayout',compact('hotDeals', 'serviceDeals'));
	}

    public function getSearch() {
        $search = true;
        $category=Input::get('category');
        $country=Input::get('country');
        $city=Input::get('city');
        $search_key=Input::get('search_key');
        $deals=$this->deal->search($category,$country,$city,$search_key);
        // Show the page
        return View::make('site.homelayout',compact('deals', 'search'));
    }

    public function getDetail($id) {
        
        $deal_id = $id;
        $detail = $this->deal->detail($id);

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

    public function getHtmlCity( $countryId ) {

        $cities = array_merge(array( '0' => 'All' ), City::ByCountry( $countryId )->lists('city', 'id'));

        return View::make( 'admin/cities/_city', compact('cities'));
    }

    public function getListName() {

        $names = Service::getName();

        return Response::json($names);
    }

    public function getPage($slug) {

        $page = Page::where('slug', $slug)->first();

        if (empty($page)) {
            $page = new Page;

            $page->slug     =   $slug;
            $page->content  =   "Empty Page -> Please Edit in Admin Section";

            $page->save();
        }

        return View::make('site.pages.index', compact('page'));
    }
}
