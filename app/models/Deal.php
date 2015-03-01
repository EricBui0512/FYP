<?php

class Deal extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'service_id' => 'required',
		// 'outlet_id' => 'required|integer',
		// 'payment_date' => 'required|date',
		// 'payment_type' => 'required',
		'amount' => 'required|regex:/[\d]{1,5}.[\d]{2}/',
		'time_slot' => 'date_format:m/d/Y',
		'remind_time' => 'date_format:m/d/Y'
	];

    
	// Don't forget to fill this array
	protected $fillable = [ 'outlet_id', 'amount',
			'special_request', 'time_slot', 'remind_time' ];

	public function scopeOwner( $query )
	{
		return $query->where( 'consumer_id', Auth::id() );
	}

	public function service() {

		return $this->belongsTo('Service');
	}
}