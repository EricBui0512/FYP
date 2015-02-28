<?php
/**
 * @Author: Dung Ho
 * @Date:   2015-02-25 23:06:32
 * @Last Modified by:   Dung Ho
 * @Last Modified time: 2015-02-28 15:09:32
 */

class AdminOutletsController extends AdminController {
	
	/**
	 * Display a listing of outlets
	 *
	 * @return Response
	 */
	public function index()
	{
		$title = 'Manager Outlet';

		return View::make('admin.outlets.index', compact('title'));
	}


	/**
	 * Show the form for editing the specified outlet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$outlet = Outlet::find($id);

		return View::make('outlets.edit', compact('outlet'));
	}

	/**
	 * Update the specified outlet in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$outlet = Outlet::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Outlet::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$outlet->update($data);

		return Redirect::route('outlets.index');
	}

	/**
	 * Remove the specified outlet from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Outlet::destroy($id);

		return Redirect::route('outlets.index');
	}

	/**
     * Show a list of all the outlets formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function getData()
    {

        $outlets = Outlet::select(array('id', 'name', 'outlet_register_id', 'website', 'operation_hour', 'rate', 'active', 'created_at', 'updated_at'));

        return Datatables::of($outlets)
        // ->edit_column('created_at','{{{ Carbon::now()->diffForHumans(Carbon::createFromFormat(\'Y-m-d H\', $test)) }}}')

        ->add_column('actions', '<a href="{{{ URL::to(\'admin/outlets/\' . $id . \'/edit\' ) }}}" class="iframe btn btn-xs btn-default">{{{ Lang::get(\'button.edit\') }}}</a>
                                <a href="{{{ URL::to(\'admin/outlets/\' . $id . \'/delete\' ) }}}" class="iframe btn btn-xs btn-danger">{{{ Lang::get(\'button.delete\') }}}</a>
            ')

        ->remove_column('id')

        ->make();
    }
}