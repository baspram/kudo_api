@extends('layout.app')

@section('content')
      <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>List of Movies</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-8  col-xs-offset-1 floating-label-form-group controls">
                                <label>Search Your Movie</label>
                                <input type="text" class="form-control" placeholder="Search Your Movie" id="movie" required data-validation-required-message="Please enter your username.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group col-xs-2 search-buttons">
                                <button type="submit" class="btn btn-success btn-lg">Search</button>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="row">

            @foreach ($movie_list->getCollection()->all() as $movies)
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
                            <h1>{{$movies->title}} <span>({{$movies->year}})</span></h1>
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
                                @if ($movies->filmn_oir == 1)
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
            <div class="row">
                <div class="col-lg-12 text-center">
                    {{$movie_list->links()}}
                </div>
            </div>
            
        </div>
    </section>
@stop