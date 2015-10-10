<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImages extends Model {

	protected $table ='project_images';
	protected $fillable=["image","project_id"];
	public $timestamps=true;


}
