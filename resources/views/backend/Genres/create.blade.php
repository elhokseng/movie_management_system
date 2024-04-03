@extends('layouts.app')
@include('layouts.navigation')
@include('layouts.leftsidebar')
@section('main')
    <div class="content">
        <h2 class="mb-4 text-center">Genres of Movies</h2>
        <form action="{{ route('genres.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <label for="movieImage" class="form-label fw-bold">Genres <span class="text-danger">*</span></label>
                <input name="genre" class="form-control" type="text" id="movieImage" placeholder="Enter genres" required>
            </div>
            <div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
                <a class="btn btn-secondary mt-4" href="{{ URL::route('genres.list') }}">Cancel</a>
            </div>
        </form>
    </div>
@endsection
