@extends('centerowner.layout.master')

@section('content')
<div class="history">
<div class="container">
  <br>
  <a href="{{ url('/customer/home') }}"><img src ="{{ asset('images/slide/'. 'Previous-icon.png')}}" align="right" height="50" width="50"/></a>
  <br><h2 class="text-warning"><b>Booked Confirm </b></h2><br>
  @foreach($confirmbooks as $row)


    
    @if( Auth::user()->center_name  == $row['center_name'])
    <div class="media border p-3">
  
  <div class="media-body">
    <p class="text-warning">Customer Name: {{$row['customer_name']}}<br>
        Start Time: {{$row['start_time']}}<br>
        End Time: {{$row['end_time']}}<br>
        Date: {{$row['date']}}<br></p>
        
  </div>
</div><br>
    @endif
    @endforeach
    <br>


</div>
</div>
@endsection
