<?php
class RetailerRepository implements IRetailerRepository{
	public function __construct(\Retailer $retailer)
    {
        $this->retailer = $retailer;
    }
     
    public function __call($method, $args)
    {
        return call_user_func_array([$this->retailer, $method], $args);
    }

	public function getCurrent(){
		Retailer::owner()->get();
	}

    public function getDashboardDataThisWeek(){
        return DealTransaction::thisWeek();
    }
    public function getDashboardDataPastWeek(){
        return DealTransaction::pastWeek();
    }
    public function getOutletStatData(){
        $outletsArray = array();
        $dealsArray = array();
        
        $outlets = Outlet::owner()->get();
        $deals = Deal::dashboardDeal();

        foreach ( $outlets as $outlet )
        {
            $dealsArray = array();

            foreach ($deals as $deal )
            {
                if ( $outlet->id == $deal->outlet_id )
                {
                    $dealsArray[] = $deal;
                }
            }

            if ( count( $dealsArray ) )
            {
                $outletsArray[$outlet->id] = array( 'name' => $outlet->name, 'deal' => $dealsArray );
            }
        }
        return $outletsArray;
    }
    public function searchSpa($query){
        return $this->retailer->where('name', 'LIKE', "%".$query."%")->get();
    }
    public function getSpaLocations($retailer_id){
        return Outlet::where('retailer_id', '=', $retailer_id)->get();
    }
    public function getServiceNames($outlet_id){
        return Service::where('outlet_id', '=', $outlet_id)->get();
    }

    public function createRetailerOnSignUp($user, $data){
        $retailer = new Retailer;

        $retailer->admin_id     = $user->id;
        $retailer->category_id  = $data['category'];
        $retailer->name         = $data['spaname'];

        $retailer->save();
    }
}