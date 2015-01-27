<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type')->default('text');
			$table->integer('likes')->default(0);
			$table->integer('user_id');
			$table->integer('spot_id')->nullable();
            $table->double('lat');
            $table->double('lng');
            $table->text('content');
			$table->text('data')->nullable();
            $table->softDeletes();
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
		Schema::drop('posts');
	}

}
