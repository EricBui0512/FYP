<?php

class City extends Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

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