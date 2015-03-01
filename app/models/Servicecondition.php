<?php

class ServiceCondition extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function service()
	{
		return $this->belongsTo('Service');
	}

}