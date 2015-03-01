<?php

class Deal extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'service_id' => 'required',
		'title' => 'required',
		'amount' => 'required|regex:/[\d]{1,5}.[\d]{2}/',
		'discount' => 'regex:/[\d]{1,5}.[\d]{2}/',
		'time_slot' => 'date',
		'remind_time' => 'date'
	];

    
	// Don't forget to fill this array
	protected $fillable = [ 'service_id', 'amount', 'discount',
			'special_request', 'time_slot', 'remind_time' ];

	public function scopeOwner( $query )
	{
		return $query->leftJoin('services', 'services.id', '=', 'deails.service_id')
			->leftJoin('outlets','outlets.id','=','services.outlet_id')
			->where('outlets.admin_id', Auth::id());
	}

	public function service() {

		return $this->belongsTo('Service');
	}
}