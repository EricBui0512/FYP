<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceconditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('serviceconditions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('specialcondition');
			$table->string('condition1');
			$table->string('condition2');
			$table->string('dealcondition');
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
		Schema::drop('serviceconditions');
	}

}
