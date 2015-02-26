<?php

class Outlet extends Eloquent {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required',
		'address_id' => 'required',
		'outletregister' => 'required',
		'image' => 'required',
		'id_retailer' => 'integer',
		'id_description' => 'integer'
	];
	// Don't forget to fill this array
	protected $fillable = [];

	// get outlet id
	public function getOutlet($id){
		return $this->findOrFail($id);
    }

    // list all outlet
	public function listAll(){
		return $this->all();
    }

    // list all Outlet for LocationAdress
    public function listLocationAdress(){
		return $this->all();
    }

    // list all Outlet for LocationCity
    public function listLocationCity(){
		return $this->all();
    }

    // list all Outlet for Locationcountries
    public function listLocationCountries(){
		return $this->all();
    }

}