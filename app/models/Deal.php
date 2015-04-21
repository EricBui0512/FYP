<?php

class Deal extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'service_id' => 'required',
		'title' => 'required',
		'amount' => 'required|regex:/[\d]{1,5}/',
		'discount' => 'regex:/[\d]{1,5}/',
		'time_slot' => 'date',
		'remind_time' => 'date',
		'deal_type' => 'required'
	];

    
	// Don't forget to fill this array
	protected $fillable = [ 'service_id', 'amount', 'discount', 'title',
			'special_request', 'time_slot', 'remind_time', 'deal_type' ];

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

	public static function search( $categoryId = null, $countryId = null, $cityId = null, $keyWord = null, $dealType = '' )
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
			->where('deals.status', 'active');
		
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
			$query = $query->where('services.name', 'REGEXP', "$keyWord")
					->orWhere('outlets.name', 'REGEXP', "$keyWord");
		}

		if ( $dealType )
		{
			$query = $query->where('deals.deal_type', $dealType );
		}
		if ( ! $categoryId && ! $countryId )
		{
			$query = $query->take(12)->orderBy('id', 'desc');
		}
		
		return $query->get();
		// $log = DB::getQueryLog();
		// var_dump($log);die;
	}

	public static function dealByType( $type )
	{
		return Deal::search( null, null, null, null, $type );
	}

	public function hotDeals()
	{
		$deals = Deal::select( array( 'deals.id','deals.title','deals.amount','deals.discount','images.image_path',
				DB::raw('count(deal_transactions.deal_id) count')
			) )
			->leftJoin('services', 'services.id','=','deals.service_id')
			->leftJoin('images', function( $join )
			{
				$join->on('images.ref_id', '=', 'services.id')
					->where( 'images.image_type', '=', 'service');
			})
			->leftJoin('deal_transactions', 'deals.id', '=', 'deal_transactions.deal_id')
			->leftJoin('outlets','outlets.id','=','services.outlet_id')
			->leftJoin('addresses','addresses.id','=','outlets.address_id')
			->leftJoin('cities', 'cities.id','=','addresses.city_id')
			->leftJoin('retailers','retailers.id','=','outlets.retailer_id')
			->where('deals.status', 'active')
			->whereRaw('deal_transactions.created_at > date_sub( current_date, INTERVAL 7 day)')
			->groupBy('deal_transactions.deal_id')
			->orderBy('count', 'desc')
			->take(9)->get();

		return $deals;
	}

	public function hotService()
	{
		$services = Deal::select( array( 'deals.id','deals.title','deals.amount','deals.discount','images.image_path',
				DB::raw('count(deals.service_id) count')
			) )
			->leftJoin('services', 'services.id','=','deals.service_id')
			->leftJoin('images', function( $join )
			{
				$join->on('images.ref_id', '=', 'services.id')
					->where( 'images.image_type', '=', 'service');
			})
			->leftJoin('deal_transactions', 'deals.id', '=', 'deal_transactions.deal_id')
			->leftJoin('outlets','outlets.id','=','services.outlet_id')
			->leftJoin('addresses','addresses.id','=','outlets.address_id')
			->leftJoin('cities', 'cities.id','=','addresses.city_id')
			->leftJoin('retailers','retailers.id','=','outlets.retailer_id')
			->where('deals.status', 'active')
			->whereRaw('deal_transactions.created_at > date_sub( current_date, INTERVAL 7 day)')
			->groupBy('deals.service_id')
			->orderBy('count', 'desc')
			->take(9)->get();

		return $services;
	}
	public static function detail( $id )
	{
		$deal = Deal::select( array( 'deals.id','deals.title','deals.amount','deals.discount',
				'service_details.highlights','service_details.summary',
				'retailers.id as retailerId','retailers.name as retailerName',
				'addresses.address as outletAddress',
				'addresses.district as outletDistrict',
				'cities.city as outletCity',
				'countries.country as outletCountry',
				'addresses.address as outletAddress',
				'outlets.website as outletWebsite',
				'outlets.startTime as outletStartTime',
				'outlets.endTime as outletEndTime',
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
// var_dump( DB::getQueryLog());die;
		return $deal;
	}

	public static function dashboardDeal()
	{
		$deal = Deal::select(array('deals.id', 'deals.title', 'deals.time_slot', 'images.image_path', 'services.outlet_id',
			DB::raw('(select count(deal_transactions.id) from deal_transactions where deals.id = deal_transactions.deal_id AND DATE_FORMAT( deal_transactions.created_at, "%Y-%m-%d") = CURRENT_DATE()) AS tran_day'),
			DB::raw('(select count(deal_transactions.id) from deal_transactions where deals.id = deal_transactions.deal_id AND DATE_SUB( deal_transactions.created_at, INTERVAL 7 DAY) <= CURRENT_DATE()) AS tran_week')))
			->leftJoin('services', 'services.id','=', 'deals.service_id')
			->leftJoin('outlets', 'outlets.id', '=', 'services.outlet_id')
			->leftJoin('images', function($join) {
				$join->on('images.ref_id','=','services.id')
					->where('images.image_type', '=', 'service');
			})
			->where('deals.status', 'active')
			->where('admin_id', Auth::id())
			->where('time_slot', '>=', date('Y-m-d'))
			->orderBy('outlets.id')
			->get();
// $d = DB::getQueryLog();
// var_dump($d);die;

		return $deal;
	}

	public static function getFeaturedService(){
		
		$deals = Deal::select( array( 'deals.id','deals.title','deals.amount','deals.discount','images.image_path') )
			->leftJoin('services', 'services.id','=','deals.service_id')
			->leftJoin('images', function( $join )
			{
				$join->on('images.ref_id', '=', 'services.id')
					->where( 'images.image_type', '=', 'service');
			})
			->where('featured',1)
			->get();

		return $deals;
	}

}