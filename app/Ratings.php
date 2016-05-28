<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
		public $timestamps = false;
    //
    protected $fillable = [
			'id_user',
			'id_movie',
			'rating'
		];
}
