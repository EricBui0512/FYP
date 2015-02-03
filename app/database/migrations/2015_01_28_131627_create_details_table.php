<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_consumer')->unsigned();
			$table->string('consumeremail');
			$table->integer('id_service')->unsigned();
			$table->integer('id_outlet')->unsigned();
			$table->dateTime('paymentdate');
			$table->string('paymenttype');
			$table->string('specialrequest');
			$table->dateTime('timeslot');
			$table->timestamps('remindtime');
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
		Schema::drop('details');
	}

}
