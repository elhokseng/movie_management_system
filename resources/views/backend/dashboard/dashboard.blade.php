    @extends('layouts.app')
@include('layouts.navigation')
@include('layouts.leftsidebar')
@section('main')
    <div class="content">
        <h4 class="mt-3 mb-4">Dashboard Home</h4>
        <div class="row">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body ">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="ms-3">
                                    <h4 class="text-muted mb-2">{{ $totalMovies }}</h4>
                                    <p class="mb-0">Total Movies</p>
                                </div>
                                <div class="icon fs-1 rounded-circle">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($moviesPerGenre as $genreData)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body ">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="ms-3">
                                            <h4 class="text-muted mb-2"> {{ $genreData->total }} </h4>
                                            <p class="mb-0"> {{ $genreData->genre_name}} </p>
                                        </div>
                                        <div class="icon fs-1 rounded-circle">
                                            <i class="fa-regular fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
        
    </div>
@endsection
