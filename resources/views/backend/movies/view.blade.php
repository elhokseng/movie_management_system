@extends('layouts.app')
@include('layouts.navigation')
@include('layouts.leftsidebar')
@section('main')
    <div class="content">
        <div class="box_wrapper">
            <div class="box_body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset($movies->poster_url) }}" alt="Poster"  class="img-fluid" alt="Movie Poster">
                    </div>
                    <div class="col-md-6">
                        <h5 class="card-title">{{ $movies->title }}</h5>
                        <p class="card-text">{{ $movies->description }}</p>
                        <p class="card-text"><strong>Release Date:</strong> {{ $movies->release_date }}</p>
                        <p class="card-text"><strong>Duration:</strong> {{ $movies->duration }} minutes</p>
                        <!-- Add more movies information as needed -->
                        <a href="#" class="btn btn-primary">order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
