@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 style = "color:white">Welcome to your neighourbood Gym</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Plans</h1>
            <p style = "color:white">Plans available in our gym!</p>
            <p><a href="{{ route('blog.plans', ['id' => 1]) }}">Click to view</a></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Gallery</h1>
            <p style = "color:white">Have a look around our gym</p>
            <p><a href="{{ route('blog.post', ['id' => 2]) }}">Click to view</a></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Contact us</h1>
            <p><a href="{{ route('contact.create') }}" style = "color:white">Click for more details</a></p>
        </div>
    </div>
@endsection