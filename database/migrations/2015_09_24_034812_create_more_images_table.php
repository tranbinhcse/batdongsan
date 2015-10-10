<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoreImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('more_images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('post_id')->unsigned();
			$table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
			$table->string('link');
			$table->rememberToken();
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
		Schema::drop('more_images');
	}

}
