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
		return $query->select(array('deals.*'))
			->leftJoin('services', 'services.id', '=', 'deals.service_id')
			->leftJoin('outlets','outlets.id','=','services.outlet_id')
			->where('outlets.admin_id', Auth::id());
	}

	public function service() {

		return $this->belongsTo('Service');
	}

	public function feedback()
	{
		return $this->hasMany('Feedback');
	}

	public static function search( $categoryId = null, $countryId = null, $cityId = null, $keyWord = null )
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
			->leftJoin('retailers','retailers.id','=','outlets.retailer_id');
		
		if ( $categoryId )
		{
			$query = $query->where('retailers.category_id', $categoryId);
		}	
		if ( $cityId )
		{
			$query = $query->where('cities.id', $cityId);
		}
		if ( $countryId )
		{
			$query = $query->where('cities.country_id', $countryId);
		}
		if ( $keyWord )
		{
			$query = $query->where('deals.name', 'LIKE', "%$keyWord%");
		}
		if ( ! $categoryId && ! $countryId )
		{
			$query = $query->take(12)->orderBy('id', 'desc');
		}
		
		return $query->get();
	}

	public static function detail( $id )
	{
		$deal = Deal::select( array( 'deals.id','deals.title','deals.amount','deals.discount',
				'service_details.highlights','service_details.summary',
				'service_conditions.special_condition','service_conditions.condition1',
				'service_conditions.condition2','outlets.phone',
				DB::raw('concat(addresses.address, " - ",cities.city," - ",countries.country) AS address'),
				DB::raw('group_concat(images.image_path) AS big_img') ,
				DB::raw('group_concat(images.thumbnail_path) AS thumb_img')))
			->leftJoin('services', 'services.id','=','deals.service_id')
			->leftJoin('images', function( $join )
			{
				$join->on('images.ref_id', '=', 'services.id')
					->where( 'images.image_type', '=', 'service');
			})
			->leftJoin('outlets','outlets.id','=','services.outlet_id')
			->leftJoin('addresses','addresses.id','=','outlets.address_id')
			->leftJoin('cities', 'cities.id','=','addresses.city_id')
			->leftJoin('countries', 'countries.id','=','cities.country_id')
			->leftJoin('retailers','retailers.id','=','outlets.retailer_id')
			->leftJoin('service_details','service_details.id','=','services.detail_id')
			->leftJoin('service_conditions','service_conditions.id','=','services.condition_id')
			->where('deals.id', $id)->first();

		return $deal;
	}

	public static function dashboardDeal()
	{
		$deal = Deal::select(array('deals.id', 'deals.title', 'deals.time_slot', 'images.image_path',
			DB::raw('(select count(deal_transactions.id) from deal_transactions where deals.id = deal_transactions.deal_id AND DATE_FORMAT( deal_transactions.created_at, "%Y-%m-%d") = CURRENT_DATE()) AS tran_day'),
			DB::raw('(select count(deal_transactions.id) from deal_transactions where deals.id = deal_transactions.deal_id AND DATE_SUB( deal_transactions.created_at, INTERVAL 7 DAY) <= CURRENT_DATE()) AS tran_week')))
			->leftJoin('services', 'services.id','=', 'deals.service_id')
			->leftJoin('outlets', 'outlets.id', '=', 'services.outlet_id')
			->leftJoin('images', function($join) {
				$join->on('images.ref_id','=','services.id')
					->where('images.image_type', '=', 'service');
			})
			->where('admin_id', Auth::id())
			->where('time_slot', '>=', date('Y-m-d'))
			->get();
// $d = DB::getQueryLog();
// var_dump($d);die;
		return $deal;
	}
}