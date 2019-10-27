@extends('layouts.master')
@section('content')
<div class="history">
<div class="container">
<br>
<br>
<a href="{{ url('/customer/home') }}"><img src ="{{ asset('images/slide/'. 'Previous-icon.png')}}" align="right" height="50" width="50"/></a>
<h1 class="text-warning">View History</h1>
	@foreach($requestbokkings as $row)

	@if( Auth::user()->email  == $row['email'])
	
	<div class="media border p-3">
  <div class="media-body">
    <h4>Center Name: {{$row['center_name']}}</h4>
    <p>Address: {{$row['address']}}<br>
    	Date: {{$row['date']}}<br>
    	Start Time: {{$row['start_time']}}<br>
	    End Time: {{$row['end_time']}}</p>
  </div>
</div><br>
	@endif
	@endforeach
	<br><br><br><br><br><br><br>
</div>
</div>
@endsection
