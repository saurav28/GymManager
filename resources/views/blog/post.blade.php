@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Our gallery</h2>
        </div>
    </div>
    <div id ="myCarousel" class="carousel slide" data-ride ="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        
  </ol>
    <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{url('/images/1.jpg')}}" alt="Weight racks" style="width:100%;">
    </div>

    <div class="item">
      <img src="{{url('/images/2.jpeg')}}" alt="TreadMills" style="width:100%;">
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection