<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use App\Movies;

use App\Old_raters;

use App\Adult_raters;

use App\Youngster_raters;

use App\User;

use App\Users_profiles;

use App\User_behaviours;

use App\Ratings;

use Auth;


class MoviesController extends Controller
{
    //
    //
    public function index(){

    	// $top_movies = Movies::orderBy('average_rating', 'desc')->take(10)->get();
        $top_movies = Movies::where('average_rating', '=',  5)->get()->random(10);// 
        $children_movies = Movies::where('childrens', '=', 1)->orderBy('rater_count', 'desc')->take(5)->get();
        $animation_movies = Movies::where('animation', '=', 1)->orderBy('rater_count', 'desc')->take(5)->get();
        
        $youngster = Youngster_raters::orderBy('rater_count', 'desc')->take(10)->get();
        $youngster_movies = [];
        foreach ($youngster as $i){
            $id_movie = $i->id_movie;
            $movie = Movies::where('id_movie', '=', $id_movie)->get();
            array_push($youngster_movies, $movie);
        }

        $old = Old_raters::orderBy('rater_count', 'desc')->take(10)->get();
        $old_movies = [];
        foreach ($old as $i){
            $id_movie = $i->id_movie;
            $movie = Movies::where('id_movie', '=', $id_movie)->get();
            array_push($old_movies, $movie);
        }

        $adult = Adult_raters::orderBy('rater_count', 'desc')->take(10)->get();
        $adult_movies = [];
        foreach ($adult as $i){
            $id_movie = $i->id_movie;
            $movie = Movies::where('id_movie', '=', $id_movie)->get();
            array_push($adult_movies, $movie);
        }
    	return view('movies.index', compact(['top_movies', 'youngster_movies', 'old_movies', 'adult_movies', 'children_movies', 'animation_movies']));
    }

    public function lists(){

        $movie_list = Movies::paginate(12);

    	return view('movies.lists', compact('movie_list'));
    }

    public function show($id){

        $movie = Movies::where('id_movie', '=', $id)->get();

    	return view('movies.show', compact('movie'));
    }

    public function store(){
        $user = Auth::user()->user_id;
        $input = Request::all();
        $movie_id = $input['movie_id'];

        $movie = Movies::where('id_movie', '=', $movie_id)->get();
        $avg_rate = $movie[0]->average_rating;
        $rate_count = $movie[0]->rater_count;
        $new_rate = $input['rate'];
        $new_avg_rate = ((($avg_rate * $rate_count)+$new_rate)/($rate_count+1));
        $rate_count++;
        
        $behaviour_row = User_behaviours::where('id_user', '=', $user)->get();
        $behaviour_row = $behaviour_row[0];

        if($movie[0]->action == 1){
            $action = $behaviour_row->action;
            $action++;
            $behaviour = User_behaviours::where('id_user', '=', $user)->update([
                'action' => $action,
            ]);
        }
        if($movie[0]->adventure == 1){
            $adventure = $behaviour_row->adventure;
            $adventure++;
            $behaviour = User_behaviours::where('id_user', '=', $user)->update([
                'adventure' => $adventure,
            ]);
        }
        if($movie[0]->animation == 1){
            $animation = $behaviour_row->animation;
            $animation++;
            $behaviour = User_behaviours::where('id_user', '=', $user)->update([
                'animation' => $animation,
            ]);
        }
        if($movie[0]->childrens == 1){
            $childrens = $behaviour_row->childrens;
            $childrens++;
            $behaviour = User_behaviours::where('id_user', '=', $user)->update([
                'childrens' => $childrens,
            ]);
        }
        if($movie[0]->comedy == 1){
            $comedy = $behaviour_row->comedy;
            $comedy++;
            $behaviour = Usersbehaviours::where('id_user', '=', $user)->update([
                'comedy' => $comedy,
            ]);
        }
        if($movie[0]->crime == 1){
            $crime = $behaviour_row->crime;
            $crime++;
            $behaviour = User_behaviours::where('id_user', '=', $user)->update([
                'crime' => $crime,
            ]);
        }
        if($movie[0]->documentary == 1){
            $documentary = $behaviour_row->documentary;
            $documentary++;
            $behaviour = User_behaviours::where('id_user', '=', $user)->update([
                'documentary' => $documentary,
            ]);
        }
        if($movie[0]->drama == 1){
            $drama = $behaviour_row->drama;
            $drama++;
            $behaviour = User_behaviours::where('id_user', '=', $user)->update([
                'drama' => $drama,
            ]);
        }
        if($movie[0]->fantasy == 1){
            $fantasy = $behaviour_row->fantasy;
            $fantasy++;
            $behaviour = User_behaviours::where('id_user', '=', $user)->update([
                'fantasy' => $fantasy,
            ]);
        }
        if($movie[0]->film_noir == 1){
            $film_noir = $behaviour_row->film_noir;
            $film_noir++;
            $behaviour = User_behaviours::where('id_user', '=', $user)->update([
                'film_noir' => $film_noir,
            ]);
        }
        if($movie[0]->horror == 1){
            $horror = $behaviour_row->horror;
            $horror++;
            $behaviour = User_behaviours::where('id_user', '=', $user)->update([
                'horror' => $horror,
            ]);
        }
        if($movie[0]->musical == 1){
            $musical = $behaviour_row->musical;
            $musical++;
            $behaviour = User_behaviours::where('id_user', '=', $user)->update([
                'musical' => $musical,
            ]);
        }
        if($movie[0]->mystery == 1){
            $mystery = $behaviour_row->mystery;
            $mystery++;
            $behaviour = User_behaviours::where('id_user', '=', $user)->update([
                'mystery' => $mystery,
            ]);
        }
        if($movie[0]->romance == 1){
            $romance = $behaviour_row->romance;
            $romance++;
            $behaviour = User_behaviours::where('id_user', '=', $user)->update([
                'romance' => $romance,
            ]);
        }
        if($movie[0]->sci_fi == 1){
            $sci_fi = $behaviour_row->sci_fi;
            $sci_fi++;
            $behaviour = User_behaviours::where('id_user', '=', $user)->update([
                'sci_fi' => $sci_fi,
            ]);
        }
        if($movie[0]->thriller == 1){
            $thriller = $behaviour_row->thriller;
            $thriller++;
            $behaviour = User_behaviours::where('id_user', '=', $user)->update([
                'thriller' => $thriller,
            ]);
        }
        if($movie[0]->war == 1){
            $war = $behaviour_row->war;
            $war++;
            $behaviour = User_behaviours::where('id_user', '=', $user)->update([
                'war' => $war,
            ]);
        }
        if($movie[0]->western == 1){
            $western = $behaviour_row->western;
            $western++;
            $behaviour = User_behaviours::where('id_user', '=', $user)->update([
                'western' => $western,
            ]);
        }


        $users = Users_profiles::where('id_user', '=', $user)->get();
        $users = $users[0];
        $age = $users->age;
        if (($age >= 18) && ($age < 25)){
            $young = Youngster_raters::where('id_movie', '=', $movie_id)->get();
            $young = $young[0];
            $rater = $young->rater_count;
            $rater++;
            $update = Youngster_raters::where('id_movie', '=', $movie_id)->update([
                'rater_count' => $rater,
            ]);
        } else if (($age >= 25) && ($age < 45)){
            $young = Adult_raters::where('id_movie', '=', $movie_id)->get();
            $young = $young[0];
            $rater = $young->rater_count;
            $rater++;
            $update = Adult_raters::where('id_movie', '=', $movie_id)->update([
                'rater_count' => $rater,
            ]);
        } else if (($age >= 45) && ($age < 50)) {
            $young = Old_raters::where('id_movie', '=', $movie_id)->get();
            $young = $young[0];
            $rater = $young->rater_count;
            $rater++;
            $update = Old_raters::where('id_movie', '=', $movie_id)->update([
                'rater_count' => $rater,
            ]);
        }  

        $update_movie = Movies::where('id_movie', '=', $movie_id)->update([
            'average_rating' => $new_avg_rate,
            'rater_count' => $rate_count,
        ]);

        $rating = Ratings::create([
            'id_user' => $user,
            'id_movie' => $movie_id,
            'rating' => $input['rate'],
        ]);


        
        return redirect('user');            
    }
}
