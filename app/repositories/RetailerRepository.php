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
}