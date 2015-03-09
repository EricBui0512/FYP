<?php

class Picture extends \Eloquent {

	public $table = 'images';
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['ref_id', 'image_path', 'big_path', 'thumbnail_path','image_type'];

	public static function getByRefId( $refId, $type )
	{
		$images = Picture::where('ref_id', $refId)
				->where('image_type', $type)
				->get();

		return $images;
	}
}