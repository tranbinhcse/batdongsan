<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MoreImage extends Model {

	protected $table = 'more_images';
	protected $fillable = ['post_id', 'link'];
	protected $hidden = ['remember_token'];

	public function post(){
		return $this->belongTo('App\Post');
	}

}
