<?php

class Cancellation extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'tran_id' => 'integer'
	];

	// Don't forget to fill this array
	protected $fillable = ['tran_id','who_id','reason','who'];

}