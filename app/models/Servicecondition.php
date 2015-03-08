<?php

class ServiceCondition extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['special_condition', 'condition1','condition2'];

	public function service()
	{
		return $this->hasOne('Service');
	}

}