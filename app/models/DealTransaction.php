<?php

class DealTransaction extends \Eloquent {
	
	use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	// Add your validation rules here
	public static $rules = [
		'payment_date' => 'date',
		'payment_type' => 'required',
		'payment_status' => 'integer',
		'num' => 'integer',
		'status' => 'integer',
		'amount' => 'regex:/[\d]{1,5}.[\d]{2}/'
	];

	// Don't forget to fill this array
	protected $fillable = ['deal_id','consumer_id','consumer_email','payment_date',
			'payment_type', 'payment_status', 'num', 'amount', 'status'];

	public function scopeOwner()
	{
		return $this->where('consumer_id', Auth::id());
	}

	public static function byDeal( $id )
	{
		return DealTransaction::where( 'deal_id', $id )->paginate(10);
	}
}