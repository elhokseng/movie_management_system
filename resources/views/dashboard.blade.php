@extends('layouts.app')
@include('layouts.navigation')
<div class="container_fluid">
    <div class="alert alert-dark">
        <h3 class="text-center">
            You login as
            <span>
                {{Auth::user()->name}}
            </span>
        </h3>
        
    </div>
</div>