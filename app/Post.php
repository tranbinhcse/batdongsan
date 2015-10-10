<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $table = 'posts';
	protected $fillable = ['id_type', 'id_purpose', 'title', 'location', 'address', 
	'price', 'id_info', 'sLand', 'sFloor', 'direction', 'wFloor', 'hFloor', 'numFloor', 'numRoom', 'numToilet', 'wRoad1', 
	'status1', 'sumLand', 'hLand','wLand',
	'wRoad2', 'status2', 'description', 'uName', 'uPhone', 'uEmail', 'uAddress', 'user_id', 'accept'];
	protected $hidden = ['remember_token'];

	public function more_image (){
		return $this->hasMany('App\MoreImage');
	}

	public function user(){
		return $this->belongTo('App\User');
	}
}
