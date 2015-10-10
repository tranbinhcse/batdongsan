<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

	protected $table ='project';
	protected $fillable=["name","alias","category","image","dientich","city","district","ward","address","mattien","dtruocnha","stang","sphong","toilet","huong","desciption","metakey","tags"];
	public $timestamps=true;

	public function pimages(){
		return $this->hasMany('App\ProjectImages');
	}

}
