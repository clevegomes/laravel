<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vehicles extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('vehicles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('model');
			$table->string('registration_no')->unique();
			$table->string('desc');
			$table->integer('ownerid');
			$table->boolean('status',true);
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
		//
		Schema::drop('vehicles');
	}

}
