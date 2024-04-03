@extends('layouts.app')
@include('layouts.navigation')
@include('layouts.leftsidebar')
@section('main')
<div class="content"> 
    <div class="row mt-2">
        <div class="col-md-9">
            <h3> Genres <span class="fs-5">List</span> </h3> 
        </div>
        <div class="col-md-3 d-flex justify-content-end">
            <a class="btn btn-primary" href="{{URL::route('genres.create')}}"><i class="fa-solid fa-circle-plus"></i> Add New</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>  
                    <th scope="col">Title Name</th>
                </tr>
            </thead>    
            <tbody>
                @foreach ($genres as $genre)
                    <tr>
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>
                            {{$genre->name}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection