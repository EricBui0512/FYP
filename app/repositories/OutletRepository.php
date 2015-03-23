<?php 
class OutletRepository implements IOutletRepository
{
	public function __construct(\Retailer $outlet)
    {
        $this->outlet = $outlet;
    }
     
    public function __call($method, $args)
    {
        return call_user_func_array([$this->outlet, $method], $args);
    }
    public function owner(){
    	return Outlet::owner();
    }

    public function getTimeSlot($service_id){
        $service = Service::find($service_id);
        $outlet = Outlet::find($service->outlet_id);
        $startTime = explode(':',$outlet->startTime);
        $endTime = explode(':',$outlet->endTime);
        if (count($startTime)<2 || count($endTime)<2) {
            return array();
        }
        $start=mktime($startTime[0], $startTime[1], 0, 8, 12, 2014);
        $end=mktime($endTime[0], $endTime[1], 0, 8, 12, 2014);
        $hourArray = array();
        $count = 1;
        $hourArray[] = $start;
        while($start<$end && $count<1000){
            $date = $start + $service->time_operate*60;
            $hourArray[] = $date;
            $start = $date;
            $count ++;
        }
        return $hourArray;
    }
}
?>