<?php

use Illuminate\Http\Request;
use App\requestbokking;
use App\centerowner;
use App\comment;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('customer')->user();

    //dd($users);

    return view('customer.home');
})->name('home');


Route::get('/viewCenter', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('customer')->user();

    //dd($users);
    $centerowners =  centerowner::all()->toArray();
    return view('customer.viewCenter',compact('centerowners'));
})->name('viewCenter');

Route::get('/requestBooking', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('customer')->user();

    //dd($users);

    return view('customer.requestBooking');
})->name('requestBooking');

Route::get('/viewHistory', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('customer')->user();

    //dd($users);
     $requestbokkings =  requestbokking::all()->toArray();
    return view('customer.viewHistory',compact('requestbokkings'));
})->name('viewHistory');

Route::get('/comment', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('customer')->user();

    //dd($users);
     $comments =  comment::all()->toArray();
    return view('customer.comment',compact('comments'));
})->name('comment');