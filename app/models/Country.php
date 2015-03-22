<?php

class Country extends \Eloquent {
	const DEFAULT_COUNTRY = 207;
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	/**
	 * Get the country's city.
	 *
	 * @return array
	 */
	public function cities()
	{
		return $this->hasMany('City');
	}
	public static function getKeyValueData(){
		return array( null => 'All' ) + Country::lists('country','id');
	}
}