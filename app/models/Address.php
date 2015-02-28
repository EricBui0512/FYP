<?php

class Address extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'address' => 'required',
		'city_id' => 'required|integer',
	];

	// Don't forget to fill this array
	protected $fillable = ['address', 'city_id','district', 'postal_code'];

	public function city() {

		return $this->belongsTo('City');
	}
}