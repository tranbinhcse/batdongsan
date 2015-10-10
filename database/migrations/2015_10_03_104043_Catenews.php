<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Catenews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catenews', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string("name");
            $table->string("alias");
            $table->integer("order");
            $table->integer("category")->nullable();
            $table->string("image")->nullable();
            $table->mediumText("desciption")->nullable();
            $table->string("metakey")->nullable();
            $table->string("tags")->nullable();
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
        Schema::drop('catenews');
    }
}
