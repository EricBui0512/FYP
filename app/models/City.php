<?php

class City extends Eloquent {

	// Add your validation rules here
	public static $rules = [
		'country_id' => 'required|integer|min:1',
		'city' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [ 'city', 'country_id' ];

	/**
	 * Get the city's country's.
	 *
	 * @return Country
	 */
	public function country()
	{
		return $this->belongsTo('Country');
	}

	public function address() {

		return $this->hasMany('Address');
	}
}