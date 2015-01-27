<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCatchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('catches', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('description');
			$table->integer('user_id');
			$table->integer('spot_id');
			$table->integer('post_id')->nullable();
			$table->string('photo');
			$table->text('data');
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
		Schema::drop('catches');
	}

}
