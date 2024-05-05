<style>
    .movie-card {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Add shadow effect */
        transition: transform 0.3s ease-in-out;
        /* Add smooth transition */
    }

    .movie-card:hover {
        transform: translateY(-5px);
        /* Add lift effect on hover */
    }

    .card-img-top {
        height: 300px;
        /* Set desired height for the movie poster */
        object-fit: cover;
        /* Maintain aspect ratio */
    }

    .card-title {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 1rem;
        color: #
    }

</style>
@extends('layouts.app')
@include('layouts.navigation')
@section('main')
    <div class="container_fluid bg-color">
        <div class="container container-with-bg">
            <div id="carouselExample" class="carousel slide banner-slider">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://imgs.search.brave.com/b60SI5WO1DouW4zsBcF8Ict4c1Rs4zJUykIqL8d3M4g/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tYXJr/ZXRwbGFjZS5jYW52/YS5jb20vRUFFNTJK/dFFDS00vMS8wLzE2/MDB3L2NhbnZhLXRy/ZW5keS13ZWJzaXRl/LWhvbWVwYWdlLWFj/Y2Vzc29yaWVzLXNh/bGUtYmFubmVyLTJ4/SnBEelk2TE5NLmpw/Zw"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://imgs.search.brave.com/b60SI5WO1DouW4zsBcF8Ict4c1Rs4zJUykIqL8d3M4g/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tYXJr/ZXRwbGFjZS5jYW52/YS5jb20vRUFFNTJK/dFFDS00vMS8wLzE2/MDB3L2NhbnZhLXRy/ZW5keS13ZWJzaXRl/LWhvbWVwYWdlLWFj/Y2Vzc29yaWVzLXNh/bGUtYmFubmVyLTJ4/SnBEelk2TE5NLmpw/Zw"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://imgs.search.brave.com/b60SI5WO1DouW4zsBcF8Ict4c1Rs4zJUykIqL8d3M4g/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tYXJr/ZXRwbGFjZS5jYW52/YS5jb20vRUFFNTJK/dFFDS00vMS8wLzE2/MDB3L2NhbnZhLXRy/ZW5keS13ZWJzaXRl/LWhvbWVwYWdlLWFj/Y2Vzc29yaWVzLXNh/bGUtYmFubmVyLTJ4/SnBEelk2TE5NLmpw/Zw"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="row">
                <h1 class="col-md-auto">
                    <a class="" href="#">
                        Now Coming
                    </a>
                </h1>
                <h1 class="col-md-auto">|</h1>
                <h1 class="col">
                    <a href="#">
                        Coming Soon
                    </a>
                </h1>
            </div>
    
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                @foreach ($movies as $movie)
                    <div class="col">
                        <div class="card movie-card" style="width: 19rem;">
                            {{-- {{ route('movie.show', $movie->id) }} --}}
                            <a href="{{URL::route('view.show', $movie->id)}}"> <!-- Add anchor tag -->
                                <img src="{{ $movie->poster_url }}" class="card-img-top" alt="Movie Poster">
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
    <script>
        $(document).ready(function() {
            $('.banner-slider').slick({
                autoplay: true,
                autoplaySpeed: 1500, // Set the interval for autoplay to 1500 milliseconds (1.5 seconds)
                dots: true, // Show dots for navigation
                // Add more options as needed
            });
        });
    </script>
