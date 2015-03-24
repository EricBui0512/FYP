<?php
class Company extends \Eloquent {
	// Add your validation rules here
	protected $table = 'company';
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	
}