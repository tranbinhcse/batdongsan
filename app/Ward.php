<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $table ='ward';
	protected $fillable=["name",'type','location','district_id'];
	public $timestamps=false;

	public function district(){
		return $this->hasMany('App\District','district_id');
	}
 
}
