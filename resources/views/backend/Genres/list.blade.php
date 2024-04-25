@extends('layouts.app')
@include('layouts.navigation')
@include('layouts.leftsidebar')
@section('main')
    <div class="content">
        <div class="box_wrapper">
            <div class="box_body">
                <div class="box_header">
                    <div class="row mt-2">
                        <div class="col-md-9">
                            <h3> Genres <span class="fs-5">List</span> </h3>
                        </div>
                        <div class="col-md-3 d-flex justify-content-end">
                            <a class="btn btn-primary" href="{{ URL::route('genres.create') }}"><i class="fa-solid fa-circle-plus"></i>
                                Add New</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th width="20%">#</th>
                                <th width="30%">Title Name</th>
                                <th width="15%">Create at</th>
                                <th width="15%">Update at</th>
                                <th width="30%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($genres as $genre)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $genre->name }}
                                    </td>
                                    <td>
                                        {{ $genre->created_at }}
                                    </td>
                                    <td>
                                        {{ $genre->updated_at }}
                                    </td>
                                    <td>
                                        <a href="{{ route('genres.show', $genre->id) }}" class="btn btn-info btn-sm"><i
                                                class="fa fa-eye"></i> View</a>
                                        {{-- <a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-primary btn-sm"><i
                                                class="fa fa-edit"></i> Edit</a> --}}
                                        <form action="{{ route('genres.destroy', $genre->id) }}" method="POST"
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
