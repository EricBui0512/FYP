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

    public function getChartDay()
    {
    	$data = DealTransaction::chartDay();
    	$days  = array( 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13);

    	$tran = $charts = array();

    	foreach ($days as $day)
    	{
    		$count = 0;
    		$dayConvert = date('m-d-Y', strtotime("-$day day"));

    		foreach ( $data as $key => $value ) {
    			// var_dump($value);die;
    			if ( $dayConvert === $value->created_at )
    			{
    				$count = $value->count;
    			}
    		}
    		$tran = array('category' => $dayConvert, 'value' => $count );
		
    		array_push( $charts, $tran );
    	}

    	// foreach ($data as $key => $value) {
    		
    	// 	$day = 
    	// 	var_dump($value);

    	// }
    	var_dump($charts);
die;
    	return $data;

    }
}