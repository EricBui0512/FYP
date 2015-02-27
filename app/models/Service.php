<?php

class Service extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'outlet_id' => 'required',
		'name' => 'required',
		'photo_id' => 'integer',
		'condition_id' => 'integer',
		'detail_id' => 'integer',
		'price' => 'regex:/[\d]{1,5}.[\d]{2}/'
	];

	// Don't forget to fill this array
	protected $fillable = [ 'name', 'outlet_id', 'photo_id', 'condition_id',
			'detail_id', 'admin_id', 'active', 'price', 'time_operate' ];

	public function scopeOwner( $query ) {

		return $query->where( 'admin_id', Auth::id() );
	}
	
	public function outlets() {

		return $this->belongsTo( 'Outlet' );
	}
}