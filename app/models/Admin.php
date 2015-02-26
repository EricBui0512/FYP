<?php

class Admin extends User {

	public function retailer() {

		return $this->hasOne( 'Retailer' );
	}

	public function outlets() {

		return $this->hasMany('Outlet');
	}
}