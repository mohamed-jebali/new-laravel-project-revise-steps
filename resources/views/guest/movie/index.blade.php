@extends('layouts.app')


@section('main-content')
<div class="container mt-5">
    <div class="row justify-content-around">
        @foreach($listMovies as $movie)
        <div class="card col-3 mb-3 p-0">
           <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
           <div class="card-body">
           <h5 class="card-title">Movie : {{ $movie->title }}</h5>
           <p class="card-text">Original Name: {{ $movie->original_title }}</p>
           <p class="card-text">Language: {{ $movie->language }}</p>
           <p class="card-text">Date Release: {{ $movie->date_release }}</p>
          <a href="#" class="btn btn-primary">Watch</a>
    </div>
    </div>
    @endforeach
</div>
    </div>
</div>
@endsection