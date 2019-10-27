<?php

use Illuminate\Http\Request;
use App\requestbokking;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('eventmanager')->user();

    //dd($users);
    $reqbooks = requestbokking::all()->toArray();
    return view('eventmanager.home',compact('reqbooks'));
})->name('home');

