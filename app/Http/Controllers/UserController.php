<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use App\User;

use App\Users_profiles;

use App\User_behaviours;

use App\Ratings;

use App\movies;

use Auth;


class UserController extends Controller
{
    //
    public function index(){
    	$user = Auth::user()->user_id;
    	$name = Auth::user()->name;
    	$profile = Users_profiles::where('id_user', '=', $user)->get();
    	$profile = $profile[0];

    	$rated = Ratings::where('id_user', '=', $user)->get();
    	$movies = [];
    	foreach($rated as $rate){
    		$id_movie = $rate->id_movie;
    		$movie = Movies::where('id_movie', '=', $id_movie)->get();
    		array_push($movies, $movie);
    	}
    	
    	return view('users.show', compact(['profile', 'name', 'movies']));
    }

    public function create(){
    	$user = Auth::user()->user_id;
    	$profile = Users_profiles::where('id_user', '=', $user);

    	if($profile != NULL){
    		return redirect('/');
    	}
    	return view('users.create');
    }

    public function store(){
    	$user = Auth::user()->user_id;
    	$input = Request::all();
    	
    	$new_user = Users_profiles::create([
    		'id_user' => $user,
    		'gender' => $input['gender'],
    		'age' => $input['age'],
    		'occupation' => $input['occupation'],
    	]);

    	$new_behaviour = User_behaviours::create([
    		'id_user' => $user,
    		'action' => 0,
    		'adventure' => 0,
    		'animation' => 0,
    		'childrens' => 0,
    		'comedy' => 0,
    		'crime' => 0,
    		'documentary' => 0,
    		'drama' => 0,
    		'fantasy' => 0,
    		'film_noir' => 0,
    		'horror' => 0,
    		'musical' => 0,
    		'mystery' => 0,
    		'romance' => 0,
    		'sci_fi' => 0,
    		'thriller' => 0,
    		'war' => 0,
    		'western' => 0,
    	]);
    	
    	return redirect('/');
    }
}
