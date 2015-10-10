<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table ='province';
	protected $fillable=["name",'type']; 
	public $timestamps=false;

	public function district(){
		return $this->hasMany('App\District');
	}
}
