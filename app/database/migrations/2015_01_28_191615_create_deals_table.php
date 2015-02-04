<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDealsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_consumer');
			$table->string('consumeremail');
			$table->integer('id_service')->unsigned();
			$table->integer('id_outlet')->unsigned();
			$table->datetime('paymentdate');
			$table->string('paymenttype');
			$table->decimal('amount',10);
			$table->string('specialrequest');
			$table->datetime('timeslot');
			$table->datetime('remindtime');
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
		Schema::drop('deals');
	}

}
