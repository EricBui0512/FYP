<?php

class Feedback extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'feed_back' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['deal_id', 'consumer_id','feed_back','rate'];

	public function scopeOwner()
	{
		return $this->where('consumer_id', Auth::id());
	}

	public function deal()
	{
		return $this->belongsTo('Deal');
	}
	
	public function scopeByDealId( $query, $dealId )
	{
		return $this->where('deal_id', $deal_id);
	}
}