<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\mail\SendMail;
use DB;
use App\confirmbook;

class baseController extends Controller
{
    public function welcome(){
		return view('welcome');
	}

	 public function contact(){
		return view('contact');
	}

	public function WeddingPic(){
		return view('WeddingPic');
	}

	public function birthdayPic(){
		return view('birthdayPic');
	}

	public function business(){
		return view('business');
	}

	 public function send()
	{
	Mail::send(new sendMail());
	//echo "send mail successfuly";
	return redirect()->route('centerowner.home')->with('flash.message', 'send mail successfuly!')->with('flash.class', 'success');
	}

		 function deleteReq($id)
	{
		DB::table('requestbokkings')->where('id',$id)->delete();
		//return redirect('admindoc');
		//echo "Request Successfuly Delete";
		return redirect()->route('eventmanager.home')->with('flash.message', 'Request Successfuly Delete!')->with('flash.class', 'success');
	}
	public function search(Request $request){
	$search_txt = $request->search;
	$confirmbooks=confirmbook::orderBy('id','desc')
	->where('center_name','like','%'.$search_txt.'%')
	->orwhere('start_time','like','%'.$search_txt.'%')
	->orwhere('end_time','like','%'.$search_txt.'%')
	->orwhere('date','like','%'.$search_txt.'%')
	->get();
		return view('search')->with(["confirmbooks" => $confirmbooks]);
	}

	 function deleteAssign($id)
	{
		DB::table('assignbooks')->where('id',$id)->delete();
		//return redirect('admindoc');
		//echo "Assign Book Successfuly Delete";
		return redirect()->route('centerowner.home')->with('flash.message', 'Assign Book Successfuly Delete!')->with('flash.class', 'success');
		
	}
}
