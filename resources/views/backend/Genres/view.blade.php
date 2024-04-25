@extends('layouts.app')
@include('layouts.navigation')
@include('layouts.leftsidebar')
@section('main')
<div class="content">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        @foreach ($movies as $movie)
            <div class="col">
                <div class="card movie-card" style="width: 19rem;">
                    <a href="#">
                        <img src="{{ asset($movie->poster_url) }}" class="card-img-top" alt="Movie Poster">
                    </a> <!-- Close anchor tag -->
                    <div class="card-body">
                        <p class="card-text">
                            {{ $movie->release_date }}
                            <span class="btn btn-sm btn-secondary">{{ $movie->genre->name ?? null }}</span>
                        </p>
                        <h5 class="card-title">{{ $movie->title }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
