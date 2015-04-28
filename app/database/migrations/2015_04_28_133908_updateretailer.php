<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Updateretailer extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$sql = "ALTER TABLE `booking`.`retailers` 
DROP FOREIGN KEY `fk_address_id`;
ALTER TABLE `booking`.`retailers` 
CHANGE COLUMN `address_id` `address_id` INT(10) UNSIGNED NULL ;
ALTER TABLE `booking`.`retailers` 
ADD CONSTRAINT `fk_address_id`
  FOREIGN KEY (`address_id`)
  REFERENCES `booking`.`addresses` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;";
  		DB::unprepared($sql);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
