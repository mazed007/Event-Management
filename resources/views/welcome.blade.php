<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('images/slide/'. 'evnt1.jpg')}}" height="350" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/slide/'. 'evnt2.jpg')}}" height="350" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/slide/'. 'evnt3.jpg')}}" height="350" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@extends('layouts.master')
@section('content')
<div class="welcome">
<br>
<section id="menu3" class="text-center">

 <h2 class="text-warning"><b>Welcome to Event Management</b></h2>
 <h4 class="text-warning"><b>A directory of complete wedding , birthday  &  event 

to HELP plan your perfect wedding ,birthday & event day.</b></h4><br><br>
<h2 class="text-warning"><b>Photo Gallery</b></h2><br>
<div class="row">
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{route('WeddingPic')}}">
        <img src="{{ asset('images/slide/'. 'weding.jpg')}}"  alt="Cinque Terre" width="250" height="236"> 
        <h3>Wedding Picture</h3></a>
       <!-- <p>section 1 details</p>-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{route('birthdayPic')}}">
        <img src="{{ asset('images/slide/'. 'Birthday.jpg')}}" alt="Cinque Terre" width="250" height="236"> 
        <h3>Birthday Picture</h3></a>
       <!-- <p>section 2 details</p>-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{route('business')}}">
        <img src="{{ asset('images/slide/'. 'business.jpg')}}"  alt="Cinque Terre" width="250" height="236"> 
        <h3>Business Ocaition</h3></a>
       <!-- <p>section 3 details</p>-->
        </div>
    </div>
  </div><br><br>
  <iframe width="960" height="475" src="https://www.youtube.com/embed/ZRmRKaEcbVQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</section>

<br><br>
</div>
@endsection