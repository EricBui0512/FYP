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
}
