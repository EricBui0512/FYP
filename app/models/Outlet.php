<?php

class Outlet extends Eloquent {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required',
		'address_id' => 'required',
		'outlet_register_id' => 'required',
		'image' => 'required',
		'retailer_id' => 'integer',
		'description_id' => 'integer'
	];

	// Don't forget to fill this array
	protected $fillable = [ 'name', 'admin_id', 'address_id', 'retailer_id', 'photo_id',
			'description_id', 'outlet_register_id', 'website', 'operation_hour', 'rate', 'active'];

	public function scopeOwner( $query ) {

		return $query->where( 'admin_id', Auth::id() );
	}

	public function services() {

		return $this->hasMany( 'Service' );
	}

	public function description() {

		return $this->belongsTo('OutletDescription');
	}

	
}