<?php
/**
 * @Author: Dung Ho
 * @Date:   2015-02-25 23:07:16
 * @Last Modified by:   Dung Ho
 * @Last Modified time: 2015-04-28 00:13:25
 */
class AdminSettingController extends AdminController {

	protected $slugs = [];
	protected $page;

	public function __construct(Page $page) {

		$this->page = $page;
		$this->slugs = [
			'who-are-we' => 'Who are we',
			'terms-conditions' => 'Terms and Conditions',
			'privacy' => 'Privacy',
			'why' => 'Why',
			'career' => 'Career',
			'faq' => 'FAQ',
			'how-to-buy' => 'How to buy',
			'retailer-guide' => 'Retailer Guide'
		];
	}
	/**
	 * Display a listing of pages
	 *
	 * @return Response
	 */
    public function index()
    {
        // Title
        $title = 'Page Manager';

        // Show the page
        return View::make('admin/pages/index', compact('title'));
    }


	/**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        // Title
        $title = 'Create a new page';
        $slugs = $this->slugs;

        // Show the page
        return View::make('admin/pages/create_edit', compact('title', 'slugs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        // Validate the inputs
        $validator = Validator::make(Input::all(), Page::$rules);
        // Check if the form validates with success
        if ($validator->passes())
        {
  	    // Get the inputs, with some exceptions
            $inputs = Input::except('csrf_token');

            $this->page->slug = $inputs['slug'];
            $this->page->content = $inputs['content'];
            $this->page->save();

            // Was the role created?
            if ($this->page->id)
            {
                // Redirect to the new role page
                return Redirect::to('admin/pages')->with('success', Lang::get('admin/pages/messages.create.success'));
            }

            // Redirect to the new page page
            return Redirect::to('admin/pages/create')->with('error', Lang::get('admin/pages/messages.create.error'));

        }

        // Form validation failed
        return Redirect::to('admin/pages/create')->withInput()->withErrors($validator);
    }


	/**
	 * Show the form for editing the specified page.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($page)
    {
    	// var_dump($page);die;
        if ( ! empty( $page ) )
        {
            // Title
        	$title = Lang::get('admin/pages/title.country_update');
        	// mode
        	$mode = 'edit';
        	$slugs = $this->slugs;

        	return View::make('admin/pages/create_edit', compact('slugs', 'title', 'mode', 'page'));
        }
        else
        {
            return Redirect::to('admin/pages')->with('error', Lang::get('admin/pages/messages.does_not_exist'));
        }
    }

	/**
	 * Update the specified page in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($page)
    {

        // Validate the inputs
        $validator = Validator::make(Input::all(), Page::$rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            // Update the role data
            $page->slug = Input::get('slug');
            $page->content = Input::get('content');

            // Was the role updated?
            if ($page->save())
            {
                // Redirect to the role page
                return Redirect::to('admin/pages/' . $page->id . '/edit')->with('success', Lang::get('admin/pages/messages.update.success'));
            }
            else
            {
                // Redirect to the role page
                return Redirect::to('admin/pages/' . $page->id . '/edit')->with('error', Lang::get('admin/pages/messages.update.error'));
            }
        }

        // Form validation failed
        return Redirect::to('admin/pages/' . $page->id . '/edit')->withInput()->withErrors($validator);
    }

	/**
     * Remove user page.
     *
     * @param $role
     * @return Response
     */
    public function delete($page)
    {
        // Title
        $title = Lang::get('admin/pages/title.page_delete');

        // Show the page
        return View::make('admin/pages/delete', compact('page', 'title'));
    }

    /**
     * Remove the specified user from storage.
     *
     * @param $role
     * @internal param $id
     * @return Response
     */
    public function destroy($page)
    {
        // Was the role deleted?
        if($page->delete()) {
            // Redirect to the role management page
            return Redirect::to('admin/pages')->with('success', Lang::get('admin/pages/messages.delete.success'));
        }

        // There was a problem deleting the role
        return Redirect::to('admin/pages')->with('error', Lang::get('admin/pages/messages.delete.error'));
    }

    /**
     * Show a list of all the pages formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function getPages()
    {

        $pages = Page::select(array('id', 'slug', 'created_at', 'updated_at'));

        return Datatables::of($pages)
        // ->edit_column('created_at','{{{ Carbon::now()->diffForHumans(Carbon::createFromFormat(\'Y-m-d H\', $test)) }}}')

        ->add_column('actions', '<a href="{{{ URL::to(\'admin/pages/\' . $id . \'/edit\' ) }}}" class="btn btn-xs btn-default">{{{ Lang::get(\'button.edit\') }}}</a>
                                <a href="{{{ URL::to(\'admin/pages/\' . $id . \'/delete\' ) }}}" class="iframe btn btn-xs btn-danger">{{{ Lang::get(\'button.delete\') }}}</a>
            ')

        ->make();
    }
}