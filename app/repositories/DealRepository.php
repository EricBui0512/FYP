<?php
class DealRepository implements IDealRepository{
	public function __construct(\Deal $deal)
    {
        $this->deal = $deal;
    }
     
    public function __call($method, $args)
    {
        return call_user_func_array([$this->deal, $method], $args);
    }
}