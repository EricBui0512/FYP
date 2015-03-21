<?php 
interface IRetailerRepository{
	public function getCurrent();
	public function getDashboardDataThisWeek();
	public function getDashboardDataPastWeek();
	public function getOutletStatData();
}
?>