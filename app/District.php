<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table ='district';
	protected $fillable=["name",'type','location','province_id'];
	public $timestamps=false;

	public function ward(){
		return $this->hasMany('App\Ward');
	}
	public function province(){
		return $this->belongTo('App\Province');
	}
}
