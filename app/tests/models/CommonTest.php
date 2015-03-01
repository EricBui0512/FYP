<?php 
class CommonTest extends TestCase{
	public function testName(){
		$lst = User::all();
		echo count($lst);
	}
}
?>