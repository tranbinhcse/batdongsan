<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('maps', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('address');
			$table->float('lat');
			$table->float('lng');
			$table->integer('post_id')->unsigned();
			$table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
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
		Schema::drop('maps');
	}

}
