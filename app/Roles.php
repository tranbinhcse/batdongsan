<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Bican\Roles\Models\Role;
use App\User;

class Roles extends Model
{
    //
    $role = Role::create([
	    'name' => 'Admin',
	    'slug' => 'admin',
	    'description' => '' // optional
	]);
}
