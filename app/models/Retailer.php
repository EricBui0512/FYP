<?php

class Retailer extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'category_id' => 'required|integer',
		'address_id' => 'required|integer',
		'company_register_id' => 'required',
		'name' => 'required',
		'website' => 'url'
	];

	// Don't forget to fill this array
	protected $fillable = [ 'admin_id', 'address_id', 'category_id', 'company_register_id', 'name', 'website'];

	public function scopeOwner( $query ) {

		return $query->where( 'admin_id', Auth::id() );
	}

	public function categories() {

		return $this->belongsTo('BusinessCategory');
	}

	public function admin() {

		return $this->belongsTo('Admin');
	}

	public static function getFull() {

  		$retailer = Retailer::select( array( 'retailers.id', 'admin_id', 'category_id',
		  		'company_register_id', 'retailers.name', 'website', 'retailers.created_at',
		  		'retailers.updated_at', 'cities.id AS city_id', 'cities.country_id') )
  			->leftJoin( 'addresses', 'addresses.id', '=', 'retailers.address_id')
  			->leftJoin( 'cities', 'citites.id', '=', 'addresses.city_id');

  		return $retailer;
	}
}