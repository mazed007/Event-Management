@extends('layouts.master')
@section('content')

  
  <div class="history">
<div class="container">
    <br>
    <a href="{{ url('/customer/home') }}"><img src ="{{ asset('images/slide/'. 'Previous-icon.png')}}" align="right" height="50" width="50"/></a>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default"><br>
				@foreach($comments as $row)

	
		<div class="media border p-3">
		<div class="media-body">
		<h6><b>User Name:</b> {{$row['userName']}}</h6>
		<p><b>User Comment:</b> {{$row['comment']}}</p>
	</div>
		</div>

	@endforeach
               <br> <div class="panel-heading"><u><h1>Comment</h1></u></div>


                      <!--  <div class="main">
                            <img src="{{ asset('images/slide/'. 'reg.jpg')}}" height="400" width="500"/>
                        </div>-->
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}

                       <textarea  name="comment" cols="30" rows="2"></textarea>

                        
                        <input type="hidden" name="userName" value="{{Auth::user()->customer_name}}">
                        

                    

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                            <br> <input type="submit" class="btn btn-primary" name="submit" id="submit">
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