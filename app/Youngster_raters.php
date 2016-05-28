<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Youngster_raters extends Model
{
		public $timestamps = false;
    //
    protected $fillable = [
			'rater_count'
		];
}
