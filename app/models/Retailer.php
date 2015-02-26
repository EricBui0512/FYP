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
	protected $fillable = [];

	public function scopeOwner( $query ) {

		return $query->where( 'admin_id', Auth::id() );
	}

	public function categories() {

		return $this->belongsTo('BusinessCategory');
	}

	public function admin() {

		return $this->belongsTo('Admin');
	}
}