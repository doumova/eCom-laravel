@extends('master')
@section("content")
<div class="container custom-product">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
         @foreach ($products as $item)
         <div class="item {{$item['id']==1?'active':''}}">
            <img src="{{$item['gallery']}}" class="slider-img">
            <div class="carousel-caption descrip">
              <h3>{{$item['name']}} </h3>
              <p>{{$item['description']}}</p>
            </div>
          </div>
         @endforeach
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
      
      <div class="trainding-wrapper">
          <h3>Trainding Products</h3>
          @foreach($products as $item)
          <div class="trainding-item">
              <img  class="trainding-image" src="{{$item['gallery']}} ">
              <div class="">
                <h3>{{$item['name']}} </h3>
            </div> 
          </div>
           
          @endforeach
      </div>
</div>
@endsection