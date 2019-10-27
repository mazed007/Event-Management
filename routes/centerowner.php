<?php

use Illuminate\Http\Request;
use App\assignbook;
use App\confirmbook;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('centerowner')->user();

    //dd($users);
    $assignbooks = assignbook::all()->toArray();
    return view('centerowner.home',compact('assignbooks'));
})->name('home');

Route::get('/confirmbook', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('centerowner')->user();

    //dd($users);
    $confirmbooks = confirmbook::all()->toArray();
    return view('centerowner.confirmbook',compact('confirmbooks'));
})->name('confirmbook');