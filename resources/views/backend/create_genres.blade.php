<div class="container my-5">
    <h2 class="mb-4 text-center">Genres of Movies</h2>
    <form action="{{ route('genres.store') }}" method="POST" enctype="multipart/form-data">
        @csrf   
        <div class="col-12">
            <label for="movieImage" class="form-label">Genres</label>
            <input name="genre" class="form-control" type="text" id="movieImage" placeholder="Enter genres" required> 
        </div>
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
 </div>