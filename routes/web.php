<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});

// Get data from url parameter
Route::get('/test/{id}', function ($id) {
    return 'Number is '.$id;
});

// Named Routes
Route::get("/contact",function () {
    return view('contact');
})->name('contact');

Route::get("/about",function () {
    return view('about');
})->name('about');

Route::get('/home', function () {
    return view('home');
});

// sample registration route
Route::get("user_form",function(){
    $name = 'Deepak';
    $names = 'Abishake';
    // return view('index',['name'=>$name]);
    return view('index',compact('name','names'));
});

// redirect routes
Route::post("user_reg",function(Request $request){
// dd($request->all());
$name = $request->username;
$email = $request->email;
$mobno = $request->mobno;
// return 'My Name is '.$name.' and my email address is '.$email. ' and mobile num is '.$mobno;
return redirect('user_form')->with('message','successfully saved');
});
