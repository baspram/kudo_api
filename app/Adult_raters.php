<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adult_raters extends Model
{
    //
		public $timestamps = false;
		
		protected $fillable = [
			'rater_count'
		];
}
