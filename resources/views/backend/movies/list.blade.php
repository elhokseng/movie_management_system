@extends('layouts.app')
@include('layouts.navigation')
@include('layouts.leftsidebar')
@section('main')
    <div class="content">
        <div class="box_wrapper">
            <div class="box_body">
                <div class="row mt-2">
                    <div class="col-md-9">
                        <h3> Movies <span class="fs-5">List</span> </h3>
                    </div>
                    <div class="col-md-3 d-flex justify-content-end">
                        <a class="btn btn-primary" href="{{ URL::route('movie.create') }}"><i
                                class="fa-solid fa-circle-plus"></i>
                            Add New</a>
                    </div>
                </div>
                <div class="row mt-3">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th width="5%">#</th>
                                <th width="10%">Title</th>
                                <th width="10%">Release Date</th>
                                <th width="5%">Duration (minutes)</th>
                                <th width="15%">Synopsis</th>
                                <th width="10%">Genre</th>
                                <th width="10%">Poster</th>
                                <th width="10%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($movies as $movie)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $movie->title }}</td>
                                    <td>{{ $movie->release_date }}</td>
                                    <td>{{ $movie->duration }}</td>
                                    <td>{{ $movie->synopsis }}</td>
                                    <td>{{ $movie->genre ? $movie->genre->name : 'N/A' }}</td>
                                    <td><img src="{{ asset($movie->poster_url) }}" alt="Poster" style="max-width: 100px;">
                                    </td>
                                    <td>
                                        <a href="{{ route('movie.show', $movie->id) }}" class="btn btn-info btn-sm"><i
                                                class="fa fa-eye"></i> View</a>
                                        <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-primary btn-sm"><i
                                                class="fa fa-edit"></i> Edit</a>
                                        <form action="{{ route('movies.destroy', $movie->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this movie?')"><i
                                                    class="fa fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
