@extends('layouts.master')

@section('content')
<div class="login">
<div class="container">
    <br>
    
<a href="{{ url('/customer/home') }}"><img src ="{{ asset('images/slide/'. 'Previous-icon.png')}}" align="right" height="50" width="50"/></a>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><br><h2 class="text-warning"><b>Request Booking</b></h3><br></div>


                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('customer_name') ? ' has-error' : '' }}">
                            <label for="customer_name" class="col-md-4 control-label">Customer_name</label>

                            <div class="col-md-6">
                                <input id="customer_name" type="text" class="form-control" name="customer_name" value="{{ old('customer_name') }}" autofocus>

                                @if ($errors->has('customer_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('customer_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <label for="phone_number" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" autofocus>

                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('center_name') ? ' has-error' : '' }}">
                            <label for="center_name" class="col-md-4 control-label">Center Name</label>

                            <div class="col-md-6">
                                <input id="center_name" type="text" class="form-control" name="center_name" value="{{ old('center_name') }}" autofocus>

                                @if ($errors->has('center_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('center_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <input type="hidden" name="email" value="{{Auth::user()->email}}">

                        
                        <div class="form-group{{ $errors->has('start_time') ? ' has-error' : '' }}">
                            <label for="start_time" class="col-md-4 control-label">Start Time</label>

                            <div class="col-md-6">
                                <input id="start_time" type="time" class="form-control" name="start_time" value="{{ old('start_time') }}" autofocus>

                                @if ($errors->has('start_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('end_time') ? ' has-error' : '' }}">
                            <label for="end_time" class="col-md-4 control-label">End Time</label>

                            <div class="col-md-6">
                                <input id="end_time" type="time" class="form-control" name="end_time" value="{{ old('end_time') }}" autofocus>

                                @if ($errors->has('end_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label">date</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}" autofocus>

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" name="submit" id="submit">
                                
   
                            </div>
                              
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
