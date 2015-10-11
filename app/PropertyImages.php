<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyImages extends Model
{
    protected $table ='property_images';
	protected $fillable=["image","property_id"];
	public $timestamps=true;
	public function property(){
		return $this->belongTo('App\Property');
	}
}
