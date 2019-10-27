@extends('layouts.master')
@section('content')
<div class="history">
<div class="container">
<br><h1 class="text-warning"><b>Business Ocaition Picture</b></h1><br>
<div class="row">
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{ asset('images/slide/'. 'business.jpg')}}">
        <img src="{{ asset('images/slide/'. 'business.jpg')}}"  alt="Cinque Terre" width="350" height="336"> 
        </a>
       <!-- <p>section 1 details</p>-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{ asset('images/slide/'. 'bus1.png')}}">
        <img src="{{ asset('images/slide/'. 'bus1.png')}}" alt="Cinque Terre" width="350" height="336"> 
        </a>
       <!-- <p>section 2 details</p>-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{ asset('images/slide/'. 'bus2.jpg')}}">
        <img src="{{ asset('images/slide/'. 'bus2.jpg')}}"  alt="Cinque Terre" width="350" height="336"> 
        </a>
       <!-- <p>section 3 details</p>-->
        </div><br><br>
    </div>
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{ asset('images/slide/'. 'bus3.jpg')}}">
        <img src="{{ asset('images/slide/'. 'bus3.jpg')}}"  alt="Cinque Terre" width="350" height="336"> 
        </a>
       <!-- <p>section 3 details</p>-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{ asset('images/slide/'. 'bus4.jpeg')}}">
        <img src="{{ asset('images/slide/'. 'bus4.jpeg')}}"  alt="Cinque Terre" width="350" height="336"> 
        </a>
       <!-- <p>section 3 details</p>-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{ asset('images/slide/'. 'bus5.jpg')}}">
        <img src="{{ asset('images/slide/'. 'bus5.jpg')}}"  alt="Cinque Terre" width="350" height="336"> 
        </a>
       <!-- <p>section 3 details</p>-->
        </div>
    </div>
  </div><br><br>

</div>
<br><br><br>
</div>
@endsection
