<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
			//['id_type', 'id_purpose', 'title', 'location', 'address', 
	//'price', 'id_info', 'sLand', 'sFloor', 'direction', 'wFloor', 'hFloor', 'numFloor', 'numRoom', 'numToilet', 'wRoad1', 
	//'status1', 'sumLand', 'hLand','wLand',
	//'wRoad2', 'status2', 'description', 'uName', 'uPhone', 'uEmail', 'uAddress', 'user_id', 'accept']

			$table->increments('id');
			$table->integer('id_type');
			$table->tinyInteger('id_purpose');
			$table->string('title');
			$table->string('location');
			$table->string('address');
			$table->integer('price');
			$table->tinyInteger('id_info');

			$table->integer('sLand');
			$table->integer('sFloor');
			$table->string('direction');
			$table->integer('wFloor');
			$table->integer('hFloor');
			$table->integer('numFloor');
			$table->integer('numRoom');
			$table->integer('numToilet');
			$table->integer('wRoad1');
			$table->tinyInteger('status1');

			$table->integer('sumLand');
			$table->integer('hLand');
			$table->integer('wLand');
			$table->integer('wRoad2');
			$table->tinyInteger('status2');
			$table->string('description');
			$table->string('uName',60);
			$table->string('uPhone',11);
			$table->string('uEmail',60);
			$table->string('uAddress');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->tinyInteger('accept');

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
		Schema::drop('posts');
	}

}
