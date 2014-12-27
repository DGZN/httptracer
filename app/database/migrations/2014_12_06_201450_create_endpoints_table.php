<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEndpointsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('endpoints', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('uid');
			$table->integer('gid');
			$table->string('name', 60);
			$table->string('description', 255);
			$table->string('URI', 255);
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
		Schema::drop('endpoints');
	}

}
