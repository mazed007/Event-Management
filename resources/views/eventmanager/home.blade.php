@extends('eventmanager.layout.master')

@section('content')
<div class="history">
<div class="container">
        <br> @if (session()->has('flash.message'))
 <div class="alert alert-{{ session('flash.class') }}">
        {{ session('flash.message') }}
    </div>
@endif
    <br><h1>Booking request</h1><br>

              @foreach($reqbooks as $row)
                
                
                <div class="media border p-3">
              
              <div class="media-body">
                <p> Customer Name: {{$row['customer_name']}}<br>
                    Phone Number: {{$row['phone_number']}}<br>
                    Address: {{$row['address']}}<br>
                    center_name: {{$row['center_name']}}<br>
                    start_time: {{$row['start_time']}}<br>
                    end_time: {{$row['end_time']}}<br>
                    date: {{$row['date']}}<br>
                    email: {{$row['email']}}</p>
              
               <form class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('center_name') ? ' has-error' : '' }}">
                            <label for="center_name" class="col-md-4 control-label"><b>center_name</b></label>

                            <div class="col-md-6">
                                <input id="center_name" type="text" class="form-control" name="center_name" value="{{ old('center_name') }}" autofocus>

                                @if ($errors->has('center_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('center_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <input type="hidden" name="customer_name" value="{{$row['customer_name']}}">
                        <input type="hidden" name="phone_number" value="{{$row['phone_number']}}">
                        <input type="hidden" name="address" value="{{$row['address']}}">
                        <input type="hidden" name="start_time" value="{{$row['start_time']}}">
                        <input type="hidden" name="end_time" value="{{$row['end_time']}}">
                        <input type="hidden" name="email" value="{{$row['email']}}">
                        <input type="hidden" name="date" value="{{$row['date']}}">
                    

                       
                            
                               <input class="btn btn-secondary btn-lg btn-block" type="submit" name="submit" id="submit" value="Assign Bokking">  
                            
                        
                    </form>
                     <a href="/deleteReq/{{$row['id']}}"><button class="btn btn-secondary btn-lg btn-block">Request Delete</button> </a>
                    </div>
            </div><br>
                @endforeach
</div>
</div>
@endsection
