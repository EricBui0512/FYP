<?php
/**
 * @Author: Dung Ho
 * @Date:   2015-02-26 08:21:09
 * @Last Modified by:   Dung Ho
 * @Last Modified time: 2015-02-26 16:35:59
 */
class AdminDashboardController extends AdminController {

	/**
	 * Admin dashboard
	 *
	 */
	public function getIndex()
	{
        return View::make('admin/dashboard');
	}


}