<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catenews extends Model
{
    protected $table = 'catenews';
	protected $fillable = ['name', 'alias', 'order', 'parent_id', 'image', 'desciption', 'metakey', 'tags'];
 	public $timestamps = false;

 	public function news()
 	{
 		return $this->hasMany('App\News');
 	}
}
