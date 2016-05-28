@extends('layout.app')

@section('content')
       <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>{{$name}}</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-4">
                    <h4> Age Category:
                    @if($profile->age == 1)
                        Under 18
                    @elseif ($profile->age == 18)
                        18-24
                    @elseif ($profile->age == 25)
                        25-34
                    @elseif ($profile->age == 35)
                        35-44  
                    @elseif ($profile->age == 45)
                        45-49
                    @elseif ($profile->age == 50)
                        50-55
                    @elseif ($profile->age == 56)
                        56+ 
                    @endif

                     years old</h4>
                    <h4> Gender: 
                    @if ($profile->gender == 'M')
                        Male 
                    @else
                        Female
                    @endif
                    </h4>
                    <h4> Occupation:
                    @if($profile->occupation == 1)
                        Academic/Educator
                    @elseif ($profile->occupation == 2)
                        Artist
                    @elseif ($profile->occupation == 3)
                        Clerical/Admin
                    @elseif ($profile->occupation == 4)
                        College/Grad Student
                    @elseif ($profile->occupation  == 5)
                        Costumer Service
                    @elseif ($profile->occupation == 6)
                        Doctor/Health Service
                    @elseif ($profile->occupation == 7)
                        Executive/Managerial
                    @elseif ($profile->occupation == 8)
                        Farmer
                    @elseif ($profile->occupation == 9)
                        Homemaker
                    @elseif ($profile->occupation == 10)
                        Student
                    @elseif ($profile->occupation == 11)
                        Lawyer
                    @elseif ($profile->occupation == 12)
                        Programmer
                    @elseif ($profile->occupation == 13)
                        Retired
                    @elseif ($profile->occupation == 14)
                        Sales/Marketing
                    @elseif ($profile->occupation == 15)
                        Scientist                        
                    @elseif ($profile->occupation == 16)
                        Self-employed
                    @elseif ($profile->occupation == 17)
                        Technician/Engineer
                    @elseif ($profile->occupation == 18)
                        Tradesman/Craftsman
                    @elseif ($profile->occupation == 19)
                        Unemployed
                    @elseif ($profile->occupation == 20)
                        Writer
                    @elseif ($profile->occupation == 0)
                        "Other" or not specified
                    @endif
                    </h4>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <h3>Movies you've rated</h3>
                    <br>
                    @if (count($movies))
                        <div class="row">
                            @foreach ($movies as $movie)
                                <div class="portfolio-item">
                                <a href="{{ action('MoviesController@show', [$movie[0]->id_movie])}}" class="portfolio-link" data-toggle="modal">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <i class="fa fa-thumbs-o-up fa-3x"></i> 
                                        </div>
                                    </div>
                                    <div class="left-item">
                                        <h1>{{number_format((integer)$movie[0]->average_rating)}}/5</h1>                            
                                    </div>
                                    <div class="right-item">
                                        <h1>{{$movie[0]->title}} <span>({{$movie[0]->year}})</span></h1>
                                        <h3>Genre: <span>
                                            @if ($movie[0]->action == 1)
                                                action 
                                            @endif
                                            @if ($movie[0]->adventure == 1)
                                                adventure
                                            @endif
                                            @if ($movie[0]->animation == 1)
                                                animation
                                            @endif
                                            @if ($movie[0]->childrens == 1)
                                                children's
                                            @endif
                                            @if ($movie[0]->comedy == 1)
                                                comedy
                                            @endif
                                            @if ($movie[0]->crime == 1)
                                                crime
                                            @endif
                                            @if ($movie[0]->documentary == 1)
                                                documentary
                                            @endif
                                            @if ($movie[0]->drama == 1)
                                                drama
                                            @endif
                                            @if ($movie[0]->fantasy == 1)
                                                fantasy 
                                            @endif
                                            @if ($movie[0]->film_noir == 1)
                                                film-noir
                                            @endif
                                            @if ($movie[0]->horror == 1)
                                                horror
                                            @endif
                                            @if ($movie[0]->musical == 1)
                                                musical
                                            @endif
                                            @if ($movie[0]->mystery == 1)
                                                mystery
                                            @endif
                                            @if ($movie[0]->romance == 1)
                                                romance
                                            @endif
                                            @if ($movie[0]->sci_fi == 1)
                                                sci-fi 
                                            @endif
                                            @if ($movie[0]->thriller == 1)
                                                thriller
                                            @endif
                                            @if ($movie[0]->war == 1)
                                                war
                                            @endif
                                            @if ($movie[0]->western == 1)
                                                western
                                            @endif

                                        </span></h3>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="col-lg-6">
                    <h3>Movies recommended for you</h3>
                    <br>
                    @foreach ($movies_recommendation as $movie)
                                <div class="portfolio-item">
                                <a href="{{ action('MoviesController@show', [$movie[0]->id_movie])}}" class="portfolio-link" data-toggle="modal">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <i class="fa fa-thumbs-o-up fa-3x"></i> 
                                        </div>
                                    </div>
                                    <div class="left-item">
                                        <h1>{{number_format((integer)$movie[0]->average_rating)}}/5</h1>                            
                                    </div>
                                    <div class="right-item">
                                        <h1>{{$movie[0]->title}} <span>({{$movie[0]->year}})</span></h1>
                                        <h3>Genre: <span>
                                            @if ($movie[0]->action == 1)
                                                action 
                                            @endif
                                            @if ($movie[0]->adventure == 1)
                                                adventure
                                            @endif
                                            @if ($movie[0]->animation == 1)
                                                animation
                                            @endif
                                            @if ($movie[0]->childrens == 1)
                                                children's
                                            @endif
                                            @if ($movie[0]->comedy == 1)
                                                comedy
                                            @endif
                                            @if ($movie[0]->crime == 1)
                                                crime
                                            @endif
                                            @if ($movie[0]->documentary == 1)
                                                documentary
                                            @endif
                                            @if ($movie[0]->drama == 1)
                                                drama
                                            @endif
                                            @if ($movie[0]->fantasy == 1)
                                                fantasy 
                                            @endif
                                            @if ($movie[0]->film_noir == 1)
                                                film-noir
                                            @endif
                                            @if ($movie[0]->horror == 1)
                                                horror
                                            @endif
                                            @if ($movie[0]->musical == 1)
                                                musical
                                            @endif
                                            @if ($movie[0]->mystery == 1)
                                                mystery
                                            @endif
                                            @if ($movie[0]->romance == 1)
                                                romance
                                            @endif
                                            @if ($movie[0]->sci_fi == 1)
                                                sci-fi 
                                            @endif
                                            @if ($movie[0]->thriller == 1)
                                                thriller
                                            @endif
                                            @if ($movie[0]->war == 1)
                                                war
                                            @endif
                                            @if ($movie[0]->western == 1)
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
@stop