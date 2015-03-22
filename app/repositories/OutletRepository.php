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
}
?>