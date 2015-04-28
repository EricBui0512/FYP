<?php 
interface IRetailerRepository{
	public function getCurrent();
	public function getDashboardDataThisWeek();
	public function getDashboardDataPastWeek();
	public function getOutletStatData();
	public function searchSpa($query);
	public function getSpaLocations($retailer_id);
	public function getServiceNames($outlet_id);
	public function createRetailerOnSignUp($user, $data);
}	
?>