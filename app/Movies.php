<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
			'average_rating',
			'rater_count'
		];
}
