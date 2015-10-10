<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Property extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('property', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string("name");
            $table->string("alias");
            $table->integer("category");
            $table->integer("type");
            $table->string("image")->nullable();
            $table->integer("province_id")->nullable();
            $table->integer("district_id")->nullable();
            $table->integer("ward_id")->nullable();
            $table->string("address")->nullable();
            $table->integer("project_id")->nullable();
            $table->integer("price")->nullable();
            $table->string("unit")->nullable();
            $table->string("acreage")->nullable();
            $table->integer("facades")->nullable();
            $table->integer("road")->nullable();
            $table->integer("floor")->nullable();
            $table->integer("room")->nullable();
            $table->string("direction")->nullable();
            $table->integer("toilet")->nullable();
            $table->integer("user_id")->nullable();
            $table->string("user_name")->nullable();
            $table->string("user_address")->nullable();
            $table->string("user_email")->nullable();
            $table->string("user_phone")->nullable();
            $table->string("user_mobile")->nullable();
            $table->integer("status")->nullable();
            $table->date("date_open")->nullable();
            $table->date("date_close")->nullable();
            $table->date("date_vip")->nullable();

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
        Schema::drop('property');
    }
}
