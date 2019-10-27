@extends('layouts.master')
@section('content')
<div class="history">
<div class="container">
<br><h1 class="text-warning"><b>Birthday Picture</b></h1><br>
<div class="row">
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{ asset('images/slide/'. 'Birthday.jpg')}}">
        <img src="{{ asset('images/slide/'. 'Birthday.jpg')}}"  alt="Cinque Terre" width="350" height="336"> 
        </a>
       <!-- <p>section 1 details</p>-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{ asset('images/slide/'. 'birt1.jpg')}}">
        <img src="{{ asset('images/slide/'. 'birt1.jpg')}}" alt="Cinque Terre" width="350" height="336"> 
        </a>
       <!-- <p>section 2 details</p>-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{ asset('images/slide/'. 'birt2.jpg')}}">
        <img src="{{ asset('images/slide/'. 'birt2.jpg')}}"  alt="Cinque Terre" width="350" height="336"> 
        </a>
       <!-- <p>section 3 details</p>-->
        </div><br><br>
    </div>
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{ asset('images/slide/'. 'birt3.jpg')}}">
        <img src="{{ asset('images/slide/'. 'birt3.jpg')}}"  alt="Cinque Terre" width="350" height="336"> 
        </a>
       <!-- <p>section 3 details</p>-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{ asset('images/slide/'. 'birt4.jpg')}}">
        <img src="{{ asset('images/slide/'. 'birt4.jpg')}}"  alt="Cinque Terre" width="350" height="336"> 
        </a>
       <!-- <p>section 3 details</p>-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{ asset('images/slide/'. 'birt5.jpg')}}">
        <img src="{{ asset('images/slide/'. 'birt5.jpg')}}"  alt="Cinque Terre" width="350" height="336"> 
        </a>
       <!-- <p>section 3 details</p>-->
        </div>
    </div>
  </div><br><br>

</div>
<br><br><br>
</div>
@endsection
