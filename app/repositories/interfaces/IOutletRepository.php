<?php
interface IOutletRepository{
	public function owner();
	public function getTimeSlot($service_id);
}