@extends('layout.app')

@section('content')
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="{{URL::asset('assets/img/movie.png')}}" alt="">
                    <div class="intro-text">
                        <span class="name">Rate Your Movie</span>
                        <hr class="star-light">
                        <span class="skills">Search Your Movie</span><br>
                        
                        {!! Form::open(['url' => 'movies/search']) !!}
                            <input id="search_title" name="search_title" type="text" class="form-control"><br>
                             <button type="submit" class="btn btn-success btn-lg" style="display:none;"> Search</button>
                        {!! Form::close() !!}

                        <span class="skills">or</span><br>
                        <div class="col-lg-8 col-lg-offset-2 text-center page-scroll">
                            <a href="{{ url('/movies') }}" class="btn btn-lg btn-outline">
                                <!-- <i class="fa fa-download"> --></i> See All Movies
                            </a>
                            <a href="#top-movies" class="btn btn-lg btn-outline">
                                <!-- <i class="fa fa-download"> --></i> See Top Movies
                            </a>
                             <a href="#top-movies-age" class="btn btn-lg btn-outline">
                                <!-- <i class="fa fa-download"> --></i> See Top Movies by Age
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="top-movies" >
        <div id="portfolio" class="top-movies">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Top Movies of All Time</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="row">
                    @foreach ($top_movies as $movies)
                        <div class="col-sm-6 portfolio-item">
                            <a href="{{ action('MoviesController@show', [$movies->id_movie])}}" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-thumbs-o-up fa-3x"></i> 
                                    </div>
                                </div>
                                <div class="left-item">
                                    <h1>{{number_format((integer)$movies->average_rating)}}/5</h1>                            
                                </div>
                                <div class="right-item">
                                    <h1>{{ str_limit($movies->title, $limit = 35, $end = '...')}} <span>({{$movies->year}})</span></h1>
                                    <h3>Genre: <span>
                                        @if ($movies->action == 1)
                                            action 
                                        @endif
                                        @if ($movies->adventure == 1)
                                            adventure
                                        @endif
                                        @if ($movies->animation == 1)
                                            animation
                                        @endif
                                        @if ($movies->childrens == 1)
                                            children's
                                        @endif
                                        @if ($movies->comedy == 1)
                                            comedy
                                        @endif
                                        @if ($movies->crime == 1)
                                            crime
                                        @endif
                                        @if ($movies->documentary == 1)
                                            documentary
                                        @endif
                                        @if ($movies->drama == 1)
                                            drama
                                        @endif
                                        @if ($movies->fantasy == 1)
                                            fantasy 
                                        @endif
                                        @if ($movies->film_noir == 1)
                                            film-noir
                                        @endif
                                        @if ($movies->horror == 1)
                                            horror
                                        @endif
                                        @if ($movies->musical == 1)
                                            musical
                                        @endif
                                        @if ($movies->mystery == 1)
                                            mystery
                                        @endif
                                        @if ($movies->romance == 1)
                                            romance
                                        @endif
                                        @if ($movies->sci_fi == 1)
                                            sci-fi 
                                        @endif
                                        @if ($movies->thriller == 1)
                                            thriller
                                        @endif
                                        @if ($movies->war == 1)
                                            war
                                        @endif
                                        @if ($movies->western == 1)
                                            western
                                        @endif

                                    </span></h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section id="top-movies-age">
        <div id="portfolio" class="movies-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Top Movies by Age</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 portfolio-item">
                        <h1 class="movies-category">Children</h1>
                        @foreach ($children_movies as $movies)
                            <a href="{{ action('MoviesController@show', [$movies->id_movie])}}" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-thumbs-o-up fa-1x"></i> 
                                    </div>
                                </div>
                                <div class="left-item">
                                    <h1>{{number_format((integer)$movies->average_rating)}}/5</h1>                            
                                </div>
                                <div class="right-item">
                                    <h1>{{ str_limit($movies->title, $limit = 35, $end = '...')}} <span>({{$movies->year}})</span></h1>
                                    <h3>Genre: <span>
                                        @if ($movies->action == 1)
                                            action 
                                        @endif
                                        @if ($movies->adventure == 1)
                                            adventure
                                        @endif
                                        @if ($movies->animation == 1)
                                            animation
                                        @endif
                                        @if ($movies->childrens == 1)
                                            children's
                                        @endif
                                        @if ($movies->comedy == 1)
                                            comedy
                                        @endif
                                        @if ($movies->crime == 1)
                                            crime
                                        @endif
                                        @if ($movies->documentary == 1)
                                            documentary
                                        @endif
                                        @if ($movies->drama == 1)
                                            drama
                                        @endif
                                        @if ($movies->fantasy == 1)
                                            fantasy 
                                        @endif
                                        @if ($movies->film_noir == 1)
                                            film-noir
                                        @endif
                                        @if ($movies->horror == 1)
                                            horror
                                        @endif
                                        @if ($movies->musical == 1)
                                            musical
                                        @endif
                                        @if ($movies->mystery == 1)
                                            mystery
                                        @endif
                                        @if ($movies->romance == 1)
                                            romance
                                        @endif
                                        @if ($movies->sci_fi == 1)
                                            sci-fi 
                                        @endif
                                        @if ($movies->thriller == 1)
                                            thriller
                                        @endif
                                        @if ($movies->war == 1)
                                            war
                                        @endif
                                        @if ($movies->western == 1)
                                            western
                                        @endif

                                    </span></h3>
                                </div>
                            </a>
                        @endforeach
                        @foreach ($animation_movies as $movies)
                            <a href="{{ action('MoviesController@show', [$movies->id_movie])}}" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-thumbs-o-up fa-1x"></i> 
                                    </div>
                                </div>
                                <div class="left-item">
                                    <h1>{{number_format((integer)$movies->average_rating)}}/5</h1>                            
                                </div>
                                <div class="right-item">
                                    <h1>{{ str_limit($movies->title, $limit = 35, $end = '...')}} <span>({{$movies->year}})</span></h1>
                                    <h3>Genre: <span>
                                        @if ($movies->action == 1)
                                            action 
                                        @endif
                                        @if ($movies->adventure == 1)
                                            adventure
                                        @endif
                                        @if ($movies->animation == 1)
                                            animation
                                        @endif
                                        @if ($movies->childrens == 1)
                                            children's
                                        @endif
                                        @if ($movies->comedy == 1)
                                            comedy
                                        @endif
                                        @if ($movies->crime == 1)
                                            crime
                                        @endif
                                        @if ($movies->documentary == 1)
                                            documentary
                                        @endif
                                        @if ($movies->drama == 1)
                                            drama
                                        @endif
                                        @if ($movies->fantasy == 1)
                                            fantasy 
                                        @endif
                                        @if ($movies->film_noir == 1)
                                            film-noir
                                        @endif
                                        @if ($movies->horror == 1)
                                            horror
                                        @endif
                                        @if ($movies->musical == 1)
                                            musical
                                        @endif
                                        @if ($movies->mystery == 1)
                                            mystery
                                        @endif
                                        @if ($movies->romance == 1)
                                            romance
                                        @endif
                                        @if ($movies->sci_fi == 1)
                                            sci-fi 
                                        @endif
                                        @if ($movies->thriller == 1)
                                            thriller
                                        @endif
                                        @if ($movies->war == 1)
                                            war
                                        @endif
                                        @if ($movies->western == 1)
                                            western
                                        @endif

                                    </span></h3>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="col-sm-3 portfolio-item">
                        <h1 class="movies-category">Youngster</h1>
                        @foreach ($youngster_movies as $movies)
                            <a href="{{ action('MoviesController@show', [$movies[0]->id_movie])}}" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-thumbs-o-up fa-1x"></i> 
                                    </div>
                                </div>
                                <div class="left-item">
                                    <h1>{{number_format((integer)$movies[0]->average_rating)}}/5</h1>                            
                                </div>
                                <div class="right-item">
                                    <h1>{{ str_limit($movies[0]->title, $limit = 35, $end = '...')}} <span>({{$movies[0]->year}})</span></h1>
                                    <h3>Genre: <span>
                                        @if ($movies[0]->action == 1)
                                            action 
                                        @endif
                                        @if ($movies[0]->adventure == 1)
                                            adventure
                                        @endif
                                        @if ($movies[0]->animation == 1)
                                            animation
                                        @endif
                                        @if ($movies[0]->childrens == 1)
                                            children's
                                        @endif
                                        @if ($movies[0]->comedy == 1)
                                            comedy
                                        @endif
                                        @if ($movies[0]->crime == 1)
                                            crime
                                        @endif
                                        @if ($movies[0]->documentary == 1)
                                            documentary
                                        @endif
                                        @if ($movies[0]->drama == 1)
                                            drama
                                        @endif
                                        @if ($movies[0]->fantasy == 1)
                                            fantasy 
                                        @endif
                                        @if ($movies[0]->film_noir == 1)
                                            film-noir
                                        @endif
                                        @if ($movies[0]->horror == 1)
                                            horror
                                        @endif
                                        @if ($movies[0]->musical == 1)
                                            musical
                                        @endif
                                        @if ($movies[0]->mystery == 1)
                                            mystery
                                        @endif
                                        @if ($movies[0]->romance == 1)
                                            romance
                                        @endif
                                        @if ($movies[0]->sci_fi == 1)
                                            sci-fi 
                                        @endif
                                        @if ($movies[0]->thriller == 1)
                                            thriller
                                        @endif
                                        @if ($movies[0]->war == 1)
                                            war
                                        @endif
                                        @if ($movies[0]->western == 1)
                                            western
                                        @endif

                                    </span></h3>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="col-sm-3 portfolio-item">
                        <h1 class="movies-category">Adult</h1>
                        @foreach ($adult_movies as $movies)
                            <a href="{{ action('MoviesController@show', [$movies[0]->id_movie])}}" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-thumbs-o-up fa-1x"></i> 
                                    </div>
                                </div>
                                <div class="left-item">
                                    <h1>{{number_format((integer)$movies[0]->average_rating)}}/5</h1>                            
                                </div>
                                <div class="right-item">
                                    <h1>{{ str_limit($movies[0]->title, $limit = 35, $end = '...')}} <span>({{$movies[0]->year}})</span></h1>
                                    <h3>Genre: <span>
                                        @if ($movies[0]->action == 1)
                                            action 
                                        @endif
                                        @if ($movies[0]->adventure == 1)
                                            adventure
                                        @endif
                                        @if ($movies[0]->animation == 1)
                                            animation
                                        @endif
                                        @if ($movies[0]->childrens == 1)
                                            children's
                                        @endif
                                        @if ($movies[0]->comedy == 1)
                                            comedy
                                        @endif
                                        @if ($movies[0]->crime == 1)
                                            crime
                                        @endif
                                        @if ($movies[0]->documentary == 1)
                                            documentary
                                        @endif
                                        @if ($movies[0]->drama == 1)
                                            drama
                                        @endif
                                        @if ($movies[0]->fantasy == 1)
                                            fantasy 
                                        @endif
                                        @if ($movies[0]->film_noir == 1)
                                            film-noir
                                        @endif
                                        @if ($movies[0]->horror == 1)
                                            horror
                                        @endif
                                        @if ($movies[0]->musical == 1)
                                            musical
                                        @endif
                                        @if ($movies[0]->mystery == 1)
                                            mystery
                                        @endif
                                        @if ($movies[0]->romance == 1)
                                            romance
                                        @endif
                                        @if ($movies[0]->sci_fi == 1)
                                            sci-fi 
                                        @endif
                                        @if ($movies[0]->thriller == 1)
                                            thriller
                                        @endif
                                        @if ($movies[0]->war == 1)
                                            war
                                        @endif
                                        @if ($movies[0]->western == 1)
                                            western
                                        @endif

                                    </span></h3>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="col-sm-3 portfolio-item">
                        <h1 class="movies-category">Elderly</h1>
                        @foreach ($old_movies as $movies)
                            <a href="{{ action('MoviesController@show', [$movies[0]->id_movie])}}" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-thumbs-o-up fa-1x"></i> 
                                    </div>
                                </div>
                                <div class="left-item">
                                    <h1>{{number_format((integer)$movies[0]->average_rating)}}/5</h1>                            
                                </div>
                                <div class="right-item">
                                    <h1>{{ str_limit($movies[0]->title, $limit = 35, $end = '...')}} <span>({{$movies[0]->year}})</span></h1>
                                    <h3>Genre: <span>
                                        @if ($movies[0]->action == 1)
                                            action 
                                        @endif
                                        @if ($movies[0]->adventure == 1)
                                            adventure
                                        @endif
                                        @if ($movies[0]->animation == 1)
                                            animation
                                        @endif
                                        @if ($movies[0]->childrens == 1)
                                            children's
                                        @endif
                                        @if ($movies[0]->comedy == 1)
                                            comedy
                                        @endif
                                        @if ($movies[0]->crime == 1)
                                            crime
                                        @endif
                                        @if ($movies[0]->documentary == 1)
                                            documentary
                                        @endif
                                        @if ($movies[0]->drama == 1)
                                            drama
                                        @endif
                                        @if ($movies[0]->fantasy == 1)
                                            fantasy 
                                        @endif
                                        @if ($movies[0]->film_noir == 1)
                                            film-noir
                                        @endif
                                        @if ($movies[0]->horror == 1)
                                            horror
                                        @endif
                                        @if ($movies[0]->musical == 1)
                                            musical
                                        @endif
                                        @if ($movies[0]->mystery == 1)
                                            mystery
                                        @endif
                                        @if ($movies[0]->romance == 1)
                                            romance
                                        @endif
                                        @if ($movies[0]->sci_fi == 1)
                                            sci-fi 
                                        @endif
                                        @if ($movies[0]->thriller == 1)
                                            thriller
                                        @endif
                                        @if ($movies[0]->war == 1)
                                            war
                                        @endif
                                        @if ($movies[0]->western == 1)
                                            western
                                        @endif

                                    </span></h3>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop    