@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">Welcome to your neighourbood Gym</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Plans</h1>
            <p>Plans available in our gym!</p>
            <p><a href="{{ route('blog.post', ['id' => 1]) }}">Click to view</a></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Gallery</h1>
            <p>Have a look around our gym</p>
            <p><a href="{{ route('blog.post', ['id' => 2]) }}">Click to view</a></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Contact us</p>
            <p><a href="{{ route('contact.create') }}">Click for more details</a></p>
        </div>
    </div>
@endsection