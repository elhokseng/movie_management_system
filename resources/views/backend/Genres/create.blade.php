@extends('layouts.app')
@include('layouts.navigation')
@include('layouts.leftsidebar')

@section('main')
    <div class="content">
        <h2 class="mb-4 text-center">Genres of Movies</h2>
        <form action="{{ route('genres.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <label for="genreName" class="form-label fw-bold">Genre Name <span class="text-danger">*</span></label>
                <input name="name" class="form-control" type="text" id="genreName" placeholder="Enter genre name" required>
            </div>
            <div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
                <a class="btn btn-secondary mt-4" href="{{ route('genres.list') }}">Cancel</a>
            </div>
        </form>
    </div>
@endsection
