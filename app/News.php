<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
	protected $fillable = ['name', 'alias', 'order', 'catenews_id', 'image', 'description', 'metakey', 'tags'];
 	public $timestamps = false;

 	public function catenews()
 	{
 		return $this->belongTo('App\Catenews');
 	}



 	public function user()
 	{
 		return $this->belongTo('App\User');
 	}
}
