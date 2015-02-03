<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOutletsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('outlets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('id_address')->unsigned();
			$table->string('outletregister');
			$table->string('website');
			$table->string('photo');
			$table->integer('id_retailer')->unsigned();
			$table->string('operationhour');
			$table->integer('id_description')->unsigned();
			$table->float('rate');
			$table->boolean('active')->default(0);
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
		Schema::drop('outlets');
	}

}
