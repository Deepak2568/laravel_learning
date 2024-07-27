<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TestController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[TestController::class,'welcome']);

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


// group route
Route::prefix('gallery')->group(function(){
    Route::get('photos', function () {
        return 'photos';
    });
    Route::get('videos', function () {
        return 'videos';
    });
});

// Middleware route
Route::get('/post/{id}', function ($id) {
   if($id == 1) {
    return 'post id is'.$id;
   }elseif($id == 2) {
    return 'post id is'.$id;
   }
})->middleware('month');

// blade templates
Route::get("student",function(){
    return view('bladelayouts.main');
});

Route::view('bhome','bladelayouts.home');
Route::view('bcontact','bladelayouts.contact');

// Conditonal statements
Route::get('statement',function(){
    $name = 'Jesuraja Deepak';
    $id = 2;
    $data = false;
    $authors = ['deepak','abi','appa','amma'];
    $family = ['Appa','Amma','Deepak','Abi',];
    return view('condition',compact('name','id','authors','data','family'));
});
