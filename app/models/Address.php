<?php

class Address extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'address' => 'required',
		'city_id' => 'required|integer',
	];

	// Don't forget to fill this array
	protected $fillable = ['address', 'city_id','district', 'postal_code'];

	public function scopeByCountry( $query, $countryId )
	{
		return $query->leftJoin('cities', 'cities.id', '=', 'addresses.city_id')->where( 'country_id', $countryId );
	}

	public function scopeByCity( $query, $cityId )
	{
		return $query->where( 'city_id', $cityId );
	}

	public function scopeOwner()
	{
		return $this->leftJoin('outlets', 'outlets.address_id', '=', 'addresses.id')
			->where( 'admin_id', Auth::id() );
	}

	public function city()
	{
		return $this->belongsTo('City');
	}

	public static function getHtmlByOutlet( $addressId )
	{
		$address = $this->find( $addressId );

		if ( ! ( empty( $address ) ) )
		{
			return $this->where('city_id', $address->city_id)->lists('address','id');
		}

		return null;
		
	}

}