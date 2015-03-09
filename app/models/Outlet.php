<?php

class Outlet extends Eloquent {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required',
		// 'address_id' => 'required',
		'outlet_register_id' => 'required',
		'retailer_id' => 'integer',
		'description_id' => 'integer',
		'full_description' =>'required',
		'address' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [ 'name', 'admin_id', 'address_id', 'retailer_id', 'phone',
			'description_id', 'outlet_register_id', 'website', 'operation_hour', 'rate', 'status'];

	public function scopeOwner( $query ) {

		return $query->where( 'admin_id', Auth::id() );
	}

	public function scopeActive( $query ) {

		return $query->where( 'status', 'active' );
	}

	public function services() {

		return $this->hasMany( 'Service' );
	}

	public function description() {

		return $this->belongsTo('OutletDescription');
	}

	public function address() {

		return $this->belongsTo('Address'); 
	}
	
	public function createTmp()
	{
		$this->name = '';
		$this->status = 'new';
		$this->admin_id = Auth::id();
		$this->save();

		return $this->id;
	}
}