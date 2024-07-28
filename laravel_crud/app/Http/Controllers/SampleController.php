<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SampleController extends Controller
{
    public function show() {
        $data = DB::select('select * from students');
        return view("create",compact('data'));
    }

    public function create(Request $request) {
        // dd($request);
        $name = $request->stud_name;
        $age = $request->stud_age;
        $mob = $request->phone;
        DB::select('INSERT INTO students(stud_name,stud_age,phone) VALUES(?,?,?)', [$name,$age,$mob]);
        return redirect("index")->with("success","Student Record Inserted Successfully");
    }

    public function edit($id){
        $editdata = DB::select('select * from students where id=?',[$id]);
        return view("edit",compact('editdata'));
    }

    public function update(Request $request, $id){
        $name = $request->stud_name;
        $age = $request->stud_age;
        $mob = $request->phone;
        $editdata = DB::update('UPDATE students SET stud_name = ?, stud_age = ?, phone = ? WHERE id = ?', [$name, $age, $mob, $id]);
        return redirect("index")->with("success","Student Record Update Successfully");
    }

    public function destroy($id){
        $editdata = DB::delete('delete from students where id = ?', [$id]);
        return redirect("index")->with("message","Student Record Deleted Successfully");
    }
}
