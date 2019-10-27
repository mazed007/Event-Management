@extends('layouts.master')
@section('content')
<div class="history">
<div class="container">
<br>
<a href="{{ url('/customer/home') }}"><img src ="{{ asset('images/slide/'. 'Previous-icon.png')}}" align="right" height="50" width="50"/></a>
<h1 class="text-warning">View Center Information</h1>
	@foreach($centerowners as $row)
	
	<div class="media border p-3">
  <div class="media-body">
    <h4>Center Name: {{$row['center_name']}}</h4>
    <p>owner_name: {{$row['owner_name']}}<br>
    	address: {{$row['address']}}<br>
    	phone_number: {{$row['phone_number']}}<br>
	    center_capacity: {{$row['center_capacity']}}<br>
	    Email: {{$row['email']}}
	</p>
  </div>
</div><br>
	@endforeach
<br><br><br><br>
</div>
</div>
@endsection