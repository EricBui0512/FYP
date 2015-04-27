<?php

class Page extends Eloquent {

	// Add your validation rules here
	public static $rules = [
		'slug' => 'required',
		'content' => 'required',
	];

	// Don't forget to fill this array
	protected $fillable = [ 'slug', 'content' ];

	
}