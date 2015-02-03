<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRetailersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('retailers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_catalogy')->unsigned();
			$table->integer('id_address')->unsigned();
			$table->integer('id_company')->unsigned();
			$table->string('website');
			$table->integer('id_subperadmin')->unsigned();
			$table->string('name');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('retailers');
	}

}
