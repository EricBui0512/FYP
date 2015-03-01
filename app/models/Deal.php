<?php

class Deal extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'service_id' => 'required',
		'title' => 'required',
		'amount' => 'required|regex:/[\d]{1,5}.[\d]{2}/',
		'discount' => 'regex:/[\d]{1,5}.[\d]{2}/',
		'time_slot' => 'date',
		'remind_time' => 'date'
	];

    
	// Don't forget to fill this array
	protected $fillable = [ 'service_id', 'amount', 'discount', 'title',
			'special_request', 'time_slot', 'remind_time' ];

	public function scopeOwner( $query )
	{
		return $query->leftJoin('services', 'services.id', '=', 'deails.service_id')
			->leftJoin('outlets','outlets.id','=','services.outlet_id')
			->where('outlets.admin_id', Auth::id());
	}

	public function service() {

		return $this->belongsTo('Service');
	}

	public static function search( $categoryId, $countryId, $cityId, $keyWord = null )
	{
		$query = Deal::select( array( 'deals.id','deals.title','deals.amount','deals.discount','images.image_path') )
			->leftJoin('services', 'services.id','=','deals.service_id')
			->leftJoin('images', function( $join )
			{
				$join->on('images.ref_id', '=', 'services.id')
					->where( 'images.image_type', '=', 'service');
			})
			->leftJoin('outlets','outlets.id','=','services.outlet_id')
			->leftJoin('addresses','addresses.id','=','outlets.address_id')
			->leftJoin('cities', 'cities.id','=','addresses.city_id')
			->leftJoin('retailers','retailers.id','=','outlets.retailer_id')
			->where('retailers.category_id', $categoryId)
			->where('cities.id', $cityId)
			->where('cities.country_id', $countryId);

		if ( $keyWord )
		{
			$query = $query->where('deals.name', 'LIKE', "%$keyWord%");
		}

		return $query->get();
	}
}