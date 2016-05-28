<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_behaviours extends Model
{
		public $timestamps = false;
    //
    protected $fillable = [
			'id_user',
			'action',
			'adventure',
			'animation',
			'childrens',
			'comedy',
			'crime',
			'documentary',
			'drama',
			'fantasy',
			'film_noir',
			'horror',
			'musical',
			'mystery',
			'romance',
			'sci_fi',
			'thriller',
			'war',
			'western'
		];
}
