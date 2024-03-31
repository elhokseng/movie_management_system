<div class="container my-5">
    <h2 class="mb-4 text-center">Movie Details Form</h2>
    <form action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf   

          
        {{-- <div class="mb-3">
            <label for="genres">Genres</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Choose Genres</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select> 
        </div> --}}

        <div class="mb-3">
            <label for="movieImage" class="form-label">Movie Image</label>
            <input name="poster_url" class="form-control" type="file" id="movieImage">
        </div>
        <div class="mb-3">
            <label for="movieTitle" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="movieTitle" placeholder="Enter movie title">
        </div>
        <div class="mb-3">
            <label for="releaseDate" class="form-label">Release Date</label>
            <input name="release_date" type="date" class="form-control" id="releaseDate">
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration (minutes)</label>
            <input name="duration" type="number" class="form-control" id="duration" placeholder="Duration in minutes">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="synopsis" class="form-control" id="description" placeholder="Enter movie description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>