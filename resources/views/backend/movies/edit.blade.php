@extends('layouts.app')
@include('layouts.navigation')
@include('layouts.leftsidebar')
@section('main')
    <div class="content">
        <div class="box_wrapper">
            <div class="box_body">
                <h2 class="mb-4 text-center">Edit Movie Details</h2>
                <form action="{{ route('movies.update', $movies->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Use PUT method for updating -->
                    <div class="mb-3">
                        <label for="genres">Genres</label>
                        <select class="form-select" aria-label="Default select example" name="genre_id">
                            <option selected>Choose Genres</option> 
                            @foreach ($genres as $genre)
                                <option value="{{ $genre->id }}" {{ $genre->id == $movies->genre_id ? 'selected' : '' }}>{{ $genre->name }}</option>
                            @endforeach 
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="movieImage" class="form-label">Movies Image</label>
                        <input name="poster_url" class="form-control" type="file" id="moviesImage">
                    </div>
                    <div class="mb-3">
                        <label for="movieTitle" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="moviesTitle"
                            placeholder="Enter movies title" value="{{ $movies->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="movie_url" class="form-label">Movie URL</label>
                        <input name="movie_url" type="url" class="form-control" id="movie_url" placeholder="Movie URL" value="{{ old('movie_url', $movies->movie_url) }}">
                    </div>
                    
                    
                    <div class="mb-3">
                        <label for="releaseDate" class="form-label">Release Date</label>
                        <input name="release_date" type="date" class="form-control" id="releaseDate" value="{{ $movies->release_date }}">
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration (minutes)</label>
                        <input name="duration" type="number" class="form-control" id="duration"
                            placeholder="Duration in minutes" value="{{ $movies->duration }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="synopsis" class="form-control" id="description" placeholder="Enter movies description">{{ $movies->synopsis }}</textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary mt-4">Update</button>
                        <a class="btn btn-secondary mt-4" href="{{ route('movie.index') }}">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
