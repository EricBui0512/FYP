<?php

class Service extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function outlets() {

		return $this->belongsTo( 'Outlet' );
	}
}