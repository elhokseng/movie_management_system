@extends('layouts.app')
@include('layouts.navigation')
@include('layouts.leftsidebar')
@sections('main')
<style>
    /* Assuming left sidebar has a class named 'left-sidebar' */
    .left-sidebar {
        width: 30%;
        float: left;
        /* Float left to place it to the left side */
    }

    .content_page { 
        margin-left: 30%;
        /* Adjust margin to start after the left sidebar */
        /* You may need to adjust this value depending on your specific layout needs */
    }
</style>
<div class="content_paeg">

</div>
@endsection
