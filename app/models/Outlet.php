<?php

class Outlet extends Eloquent {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required',
		'address_id' => 'required',
		'outletregister' => 'required',
		'image' => 'required',
		'id_retailer' => 'integer',
		'id_description' => 'integer'
	];
	// Don't forget to fill this array
	protected $fillable = [];

	public function services() {

		return $this->hasMany( 'Service' );
	}

	public function description() {

		return $this->belongsTo('OutletDescription');
	}

	
}