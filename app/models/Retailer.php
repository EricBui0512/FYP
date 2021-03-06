<?php

class Retailer extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'category_id' => 'required|integer',
		'address_id' => 'required|integer',
		'company_register_id' => 'required',
		'name' => 'required',
		'website' => 'url',
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
	public function address() {

		return $this->belongsTo('Address'); 
	}
	public static function findOne( $id ) {

  		$retailer = Retailer::select( array( 'retailers.id', 'admin_id', 'category_id','address_id',
		  		'company_register_id', 'retailers.name', 'website', 'retailers.created_at',
		  		'retailers.updated_at', 'cities.id AS city_id', 'cities.country_id') )
  			->leftJoin( 'addresses', 'addresses.id', '=', 'retailers.address_id')
  			->leftJoin( 'cities', 'cities.id', '=', 'addresses.city_id')
  			->where( 'retailers.id', $id )
  			->first();

  		return $retailer;
	}
	public static function getKeyValueData(){
		return array( null => 'Select A Spa' ) + Retailer::lists('name','id');
	}

	public function getById( $id ){
		
		$retailer = $this->select(array('retailers.name', 'retailers.website', 'images.image_path', 'outlets.address_id'))

				->join('outlets', 'outlets.retailer_id', '=', 'retailers.id')
				->join('images', function( $join ){
					$join->on('images.ref_id', '=', 'outlets.id')
						->where('images.image_type', '=', 'outlet');
				})
				->where('outlets.id', $id)
				->first();

		return $retailer;
	}
}