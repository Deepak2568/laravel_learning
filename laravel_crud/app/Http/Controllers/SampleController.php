<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SampleController extends Controller
{
    public function show() {
        return view("create");
    }

    public function create(Request $request) {
        // dd($request);
        $name = $request->stud_name;
        $age = $request->stud_age;
        $mob = $request->phone;
        DB::select('INSERT INTO students(stud_name,stud_age,phone) VALUES(?,?,?)', [$name,$age,$mob]);
        return redirect("index")->with("success","Student Record Inserted Successfully");
    }
}
