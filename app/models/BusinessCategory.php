<?php

class BusinessCategory extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function retailers() {

		return $this->hasMany('Retailer');
	}
	public static function getKeyValueData(){
		return array( null => 'All' ) + BusinessCategory::lists('name','id');
	}
}