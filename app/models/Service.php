<?php

class Service extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'outlet_id' => 'required',
		'name' => 'required',
		'condition_id' => 'integer',
		'detail_id' => 'integer',
		'price' => 'regex:/[\d]{1,5}/',
		'summary' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [ 'name', 'outlet_id', 'condition_id',
			'detail_id', 'status', 'price', 'time_operate' ];

	public function scopeOwner( $query )
	{
		return $query->leftJoin('outlets', 'outlets.id', '=', 'services.outlet_id')->where( 'admin_id', Auth::id() );
	}

	public function scopeActive( $query )
	{
		return $query->where('services.status','active');
	}
	
	public function outlets()
	{
		return $this->belongsTo( 'Outlet' );
	}

	public function deals()
	{
		return $this->hasMany('Deal');
	}

	public function detail()
	{
		return $this->belongsTo('ServiceDetail');
	}

	public function condition()
	{
		return $this->belongsTo('ServiceCondition');
	}

	public function findOne( $id )
	{
		$service = Service::select( array( 'services.id','outlet_id','services.name','price',
				'active', 'time_operate', 'services.created_at','services.updated_at',
				'service_details.summary','service_details.highlights',
				'service_conditions.special_condition','service_conditions.condition1',
				'service_conditions.condition2','condition_id','detail_id') )
			->leftJoin( 'service_details', 'service_details.id', '=', 'services.detail_id')
			->leftJoin( 'service_conditions', 'service_conditions.id', '=', 'services.condition_id')
			->where( 'services.id', $id )
			->first();

		return $service;
	}

	public function createTmp()
	{

		$this->name = '';
		$this->status = 'new';
		$this->save();

		return $this->id;
	}
}