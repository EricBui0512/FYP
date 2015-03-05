<?php

class TermsCondition extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'description' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['description','configure_no'];

}