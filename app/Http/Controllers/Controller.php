<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function requestBooking(Request $req)
	{
		$customer_name = $req->input('customer_name');
		$phone_number = $req->input('phone_number');
		$address = $req->input('address');
		$center_name = $req->input('center_name');
		$email = $req->input('email');
		$start_time = $req->input('start_time');
		$end_time = $req->input('end_time');
		$date = $req->input('date');
		
		$data = array('customer_name'=>$customer_name,'phone_number'=>$phone_number,'address'=>$address,'center_name'=>$center_name,'email'=>$email,'start_time'=>$start_time,'end_time'=>$end_time,'date'=>$date);


		DB::table('requestbokkings')->insert($data);

		 //echo "Booking request successfuly";
		 
		 //return back()->withInput();
		 //return view('customer.home');
		return redirect()->route('customer.home')->with('flash.message', 'Booking request successfuly!')->with('flash.class', 'success');
		 	}

	function comment(Request $req)
	{
		$userName = $req->input('userName');
		$comment = $req->input('comment');

		
		$data = array('comment'=>$comment,'userName'=>$userName);
		
		DB::table('comments')->insert($data);
		
		return back();
		 	}


	function assignbook(Request $req)
	{
		$customer_name = $req->input('customer_name');
		$phone_number = $req->input('phone_number');
		$address = $req->input('address');
		$center_name = $req->input('center_name');
		$email = $req->input('email');
		$start_time = $req->input('start_time');
		$end_time = $req->input('end_time');
		$date = $req->input('date');
		
		$data = array('customer_name'=>$customer_name,'phone_number'=>$phone_number,'address'=>$address,'center_name'=>$center_name,'email'=>$email,'start_time'=>$start_time,'end_time'=>$end_time,'date'=>$date);

		
		
		DB::table('assignbooks')->insert($data);

		// echo "Assign booked";
		
		return redirect()->route('eventmanager.home')->with('flash.message', 'Assign booked successfuly!')->with('flash.class', 'success');
		 	}
		 
		
		 	
		 function confirmbook(Request $req)
	{
		$customer_name = $req->input('customer_name');
		$center_name = $req->input('center_name');
		$start_time = $req->input('start_time');
		$end_time = $req->input('end_time');
		$date = $req->input('date');
		
		$data = array('customer_name'=>$customer_name,'center_name'=>$center_name,'start_time'=>$start_time,'end_time'=>$end_time,'date'=>$date);

		
		
		DB::table('confirmbooks')->insert($data);

		 //echo "Confirm booked";
		return redirect()->route('centerowner.home')->with('flash.message', 'Confirm booked successfuly!')->with('flash.class', 'success');
		
		 }
		
}
