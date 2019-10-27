@extends('centerowner.layout.master')

@section('content')
<div class="history">
<div class="container">

<br>
      <br> @if (session()->has('flash.message'))
 <div class="alert alert-{{ session('flash.class') }}">
        {{ session('flash.message') }}
    </div>
@endif
<h2 class="text-warning"><b>Custome Request</b></h2><br>
@foreach($assignbooks as $row)
    
    @if( Auth::user()->center_name  == $row['center_name'])
    <div class="media border p-3">
  
  <div class="media-body">
    
    <p class="text-warning">Customer Name: {{$row['customer_name']}}<br>
        Phone Number: {{$row['phone_number']}}<br>
        Address: {{$row['address']}}<br>
        Start Time: {{$row['start_time']}}<br>
        End Time: {{$row['end_time']}}<br>
        Date: {{$row['date']}}<br>
         Email: {{$row['email']}}</p>
         <form class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}

                        <input type="hidden" name="center_name" value="{{$row['center_name']}}"> 
                        <input type="hidden" name="customer_name" value="{{$row['customer_name']}}">
                        <input type="hidden" name="start_time" value="{{$row['start_time']}}">
                        <input type="hidden" name="end_time" value="{{$row['end_time']}}">
                        <input type="hidden" name="date" value="{{$row['date']}}">
                    
                            
                               <input class="btn btn-secondary btn-lg btn-block" type="submit" name="submit" id="submit" value="Confiorm Bokking">

                            
                        
                    </form>

                    <a href="/deleteAssign/{{$row['id']}}"><button class="btn btn-secondary btn-lg btn-block">Assign Book Delete</button> </a>
  </div>
</div><br>
    @endif
    @endforeach
    <br>
    <h2>Center Owner Send Mail To Customer</h2><br>
<form action="send" method="post">
{{csrf_field()}}
<b>Email:</b> <input type="text" name="to"><br><br>
<b>Message:</b> <textarea class="form-control" name="message" cols="30" rows="10"></textarea><br>
 <input type="submit" class="btn btn-primary" value="sends">
</form><br>
    <br>
</div>
</div>
@endsection
