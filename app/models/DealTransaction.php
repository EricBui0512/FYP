<?php

class DealTransaction extends \Eloquent {
	
	use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	// Add your validation rules here
	public static $rules = [
		'phone_number' => 'required',
		'qty' => 'integer',
		'status' => 'integer',
		'amount' => 'regex:/[\d]{1,5}/'
	];
 
	// Don't forget to fill this array
	protected $fillable = ['deal_id','consumer_id','consumer_email','phone_number','payment_date',
			'payment_type', 'payment_status', 'qty', 'amount', 'status'];

	public function scopeOwner()
	{
		return $this->where('consumer_id', Auth::id());
	}

	public static function byDeal( $id )
	{
		return DealTransaction::where( 'deal_id', $id )->paginate(10);
	}

	public static function thisWeek()
	{
		$tran = DealTransaction::select(array(
			DB::raw('COUNT(deal_transactions.id) AS this_tran_week'),
			DB::raw('SUM(deal_transactions.amount) as this_amount_week')))
			->leftJoin('deals', 'deals.id','=', 'deal_transactions.deal_id')
			->leftJoin('services', 'services.id','=', 'deals.service_id')
			->leftJoin('outlets', 'outlets.id', '=', 'services.outlet_id')
			
			->where('admin_id', Auth::id())
			->where('time_slot', '>=', date('Y-m-d'))
			->whereRaw('DATE_FORMAT(deal_transactions.created_at,"%Y-%m-%d") >= DATE_SUB(CURDATE(), INTERVAL WEEKDAY(CURDATE()) DAY)')
			->first();

		return $tran;
	}

	public static function pastWeek()
	{
		$tran = DealTransaction::select(array(
			DB::raw('COUNT(deal_transactions.id) AS past_tran_week'),
			DB::raw('SUM(deal_transactions.amount) as past_amount_week')))
			->leftJoin('deals', 'deals.id','=', 'deal_transactions.deal_id')
			->leftJoin('services', 'services.id','=', 'deals.service_id')
			->leftJoin('outlets', 'outlets.id', '=', 'services.outlet_id')
			
			->where('admin_id', Auth::id())
			->where('time_slot', '>=', date('Y-m-d'))
			->whereRaw('DATE_FORMAT(deal_transactions.created_at,"%Y-%m-%d") <= DATE_SUB(CURDATE(), INTERVAL WEEKDAY(CURDATE()) + 1 DAY)')
			->whereRaw('DATE_FORMAT(deal_transactions.created_at,"%Y-%m-%d") >= DATE_SUB(CURDATE(), INTERVAL WEEKDAY(CURDATE()) + 8 DAY)')
			->first();

		return $tran;
	}

	public static function cancellation()
	{
		$cancellations = DealTransaction::select(array(
				'deals.*',
				DB::raw('count(cancellations.id) AS cancellation')
			))
			->leftJoin('deals', 'deals.id', '=', 'deal_transactions.deal_id')
			->leftJoin('cancellations','deal_transactions.id', '=','cancellations.tran_id')
			->leftJoin('services', 'services.id', '=', 'deals.service_id')
			->leftJoin('outlets', 'outlets.id', '=', 'services.outlet_id')
			->where('admin_id', Auth::id())
			->groupBy('deals.id')
			->paginate(10);

		return $cancellations;
	}

	public static function chartDay()
	{
		$trans = DealTransaction::select(array(
				DB::raw("DATE_FORMAT(deal_transactions.created_at,'%m-%d-%Y') AS created_at"),
				DB::raw('count(deal_transactions.id) AS count')
			))
			->leftJoin('deals', 'deals.id', '=', 'deal_transactions.deal_id')
			->leftJoin('services', 'services.id', '=', 'deals.service_id')
			->leftJoin('outlets', 'outlets.id', '=', 'services.outlet_id')
			->where('admin_id', Auth::id())
			->whereRaw("DATE_FORMAT(deal_transactions.created_at,'%Y-%m-%d') >= DATE_SUB(CURDATE(), INTERVAL 15 DAY)")
			->groupBy('deal_transactions.created_at')
			->get();

		return $trans;
	}

}