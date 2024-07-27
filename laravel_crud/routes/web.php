<?php

use Illuminate\Support\Facades\Route;
use App\Http\COntrollers\SampleController;
Route::get('/', function () {
    return view('welcome');
});

Route::get("index",[SampleController::class,"show"]);
Route::post("create",[SampleController::class,"create"]);

