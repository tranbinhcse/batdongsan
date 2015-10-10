<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model {

	protected $table = 'maps';
	protected $fillable = ['name', 'address', 'lat', 'lng', 'post_id'];
	protected $hidden = ['remember_token'];

}
