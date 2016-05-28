<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_profiles extends Model
{
		public $timestamps = false;
    //
    protected $fillable = [
			'id_user',
			'gender',
			'age',
			'occupation'
		];
}
