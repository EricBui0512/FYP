<?php 
class RetailerTest extends TestCase{
	public function createRetailer(){
       $retailer = new Retailer;
        
        $retailer->admin_id     = 1;
        $retailer->category_id  = 1;
        $retailer->name         = "asdasdasdad";

        $this->assertTrue($retailer->create());
	}
}
?>