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

	public function scopeByCountry( $query, $countryId ) {

		return $query->where('country_id', $countryId);
	}

	public static function getKeyValueData(){
		return array( null => 'All' ) + City::where('country_id', Country::DEFAULT_COUNTRY)->lists('city','id');
	}
}