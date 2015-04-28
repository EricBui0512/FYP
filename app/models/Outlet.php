<?php

class Outlet extends Eloquent {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required',
		// 'address_id' => 'required',
		'outlet_register_id' => 'required',
		'retailer_id' => 'integer',
		'description_id' => 'integer',
		'full_description' =>'required',
		'address' => 'required',
		'website' => 'url'
	];

	// Don't forget to fill this array
	protected $fillable = [ 'id','name', 'admin_id', 'address_id', 'retailer_id', 'phone',
			'description_id', 'outlet_register_id', 'website', 'operation_hour', 'rate', 'status','startTime','endTime'];

	public function scopeOwner( $query ) {

		return $query->where( 'admin_id', Auth::id() );
	}

	public function scopeActive( $query ) {

		return $query->where( 'status', 'active' );
	}

	public function services() {

		return $this->hasMany( 'Service' );
	}

	public function description() {

		return $this->belongsTo('OutletDescription');
	}

	public function address() {

		return $this->belongsTo('Address'); 
	}
	
	public function createTmp()
	{
		$this->name = '';
		$this->status = 'new';
		$this->admin_id = Auth::id();
		$this->save();

		return $this->id;
	}

	public static function destroy( $outlets, $id = null )
	{
		$serviceIds = $dealIds = $outletIds = [];

		if ( ! empty($outlets )) {
			
			if ( $id ) {
				array_push($outletIds, $id);
			}
			else {
				foreach ($outlets as $key => $outlet) {

					array_push($outletIds, $outlet->id);
				}
			}
			$services = Service::whereIn('outlet_id', $outletIds)->get();
			
			foreach ($services as $key => $service) {
				array_push($serviceIds, $service->id);
			}
			// delete deal
			$deals = Deal::whereIn('service_id', $serviceIds)->get();

			foreach ($deals as $key => $deal) {
				array_push($dealIds, $deal->id);
			}
			
			// delete deal transaction
			DealTransaction::whereIn('deal_id', $dealIds)->delete();

			Deal::whereIn('id', $dealIds)->delete();

			Service::whereIn('id', $serviceIds)->delete();

			Outlet::whereIn('id', $outletIds)->delete();
		}
	}
}