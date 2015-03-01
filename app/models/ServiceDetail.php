<?php

class ServiceDetail extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['summary','highlights'];

	protected $table = 'service_details';

	public function service()
	{
		return $this->belongsTo('Service');
	}
}