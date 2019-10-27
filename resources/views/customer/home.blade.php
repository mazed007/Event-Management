@extends('layouts.master')
@section('content')
<div class="welcome">
<section id="menu" class="text-center">
<div class="container">
<br>
<br>
   @if (session()->has('flash.message'))
 <div class="alert alert-{{ session('flash.class') }}">
        {{ session('flash.message') }}
    </div>
@endif
<div class="row">
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{route('customer.viewCenter')}}">
        <img src="{{ asset('images/slide/'. 'view.jpg')}}" alt="Cinque Terre" width="220" height="200"> 
        <h3>View Center Information</h3></a>
       <!-- <p>section 1 details</p>-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{route('customer.requestBooking')}}">
        <img src="{{ asset('images/slide/'. 'write.jpg')}}" alt="Cinque Terre" width="220" height="200"> 
        <h3>Request Bokking</h3></a>
       <!-- <p>section 2 details</p>-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="menu-img">
        <a href="{{route('customer.viewHistory')}}">
        <img src="{{ asset('images/slide/'. 'history.jpg')}}"  alt="Cinque Terre" width="220" height="200"> 
        <h3>View History</h3></a>
       <!-- <p>section 2 details</p>-->
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="menu-img">
        <a href="{{route('customer.comment')}}">
       <br><br><br> <img src="{{ asset('images/slide/'. 'cmt.png')}}"  alt="Cinque Terre" width="520" height="100"> 
        <h3>User Comment</h3></a>
       <!-- <p>section 2 details</p>-->
        </div>
    </div>

    </div>
</div>




</section><br><br>
<br>
</div>



</div>
</section>
@endsection