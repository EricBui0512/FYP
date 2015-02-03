<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCancellationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cancellations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_deal')->unsigned();
			$table->integer('id_who')->unsigned();
			$table->string('reason');
			$table->string('who');
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
		Schema::drop('cancellations');
	}

}
