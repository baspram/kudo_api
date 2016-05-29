@extends('layout.app')

@section('content')
        <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>{{ str_limit($movie[0]->title, $limit = 35, $end = '...')}}</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <h4> Year of Publish: {{$movie[0]->year}}</h4>
                    <h4> Genre: 
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
                    </h4>
                    <h4> Rate: {{$movie[0]->average_rating}}/5 </h4>
                    <h4> Rater: {{$movie[0]->rater_count}} </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                @if (Auth::guest())
                    <h1>Please login to rate this movie</h1>
                @else

                    {!! Form::open(['url' => 'movies']) !!}
                        <div class="row control-group">
                            <div class="form-group col-xs-12 controls input-select-div">
                                <label style="margin-right: 60px;">Rate</label>
                                <select name="rate" id="" class="form-control" style="width:195px;">
                                    <option value="" selected disabled>Rate this movie</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <input type="hidden" name="movie_id" value="{{$movie[0]->id_movie}}">
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Rate This Movie</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                @endif
                </div>
            </div>
        </div>
    </section>
@stop