<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
	protected $table ='property';
	protected $fillable=["name","alias","category","type","image","province_id","district_id","ward_id","address","project_id","price","unit","acreage","facades","road","floor","room", "direction","toilet","user_id","user_name","user_address","user_email","user_phone","user_mobile","status","date_open","date_close","date_vip","desciption","metakey","tags"];
	public $timestamps=true;

	public function propertyimages(){
		return $this->hasMany('App\PropertyImages');
	}
}
