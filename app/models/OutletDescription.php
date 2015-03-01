<?php

class OutletDescription extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['full_description', 'summary'];

	protected $table = 'outlet_descriptions';

	public function outlets() {

		return $this->hasMany('Outlet');
	}
}