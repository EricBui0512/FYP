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

		// Get all the blog posts
		// $posts = $this->post->orderBy('created_at', 'DESC')->paginate(10);
		$outlets = Outlet::where('active', 1);
		// Show the page
		return View::make('site/homelayout',compact('outlets'));
	}

    public function postSearch() {


    }
}
