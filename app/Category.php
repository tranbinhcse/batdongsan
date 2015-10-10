<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = 'categories';
	protected $fillable = ['name', 'alias', 'parent_id', 'desciption', 'keywords'];
	protected $hidden = ['remember_token'];
}
