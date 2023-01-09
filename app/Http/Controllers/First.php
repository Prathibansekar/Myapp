<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class First extends Controller
{
    public function emplist()
    {
       $emp= DB::select('select * from employees');

        return view("emplist",['empindex'=>$emp]);
    }
    public function form()
    {
    return view("Homepage");
    }
    public function form_get(Request $request)
    {
        $name=$request->input('username');
        $password=$request->input('password');
        $dob=$request->input('dob');
        $phone_no=$request->input('number');


        //insert operation
        DB::insert('insert into employees (username,password,dob,phone_no) values (?, ?, ?, ?)', [$name, $password ,$dob ,$phone_no]);

        return 'record inserted successfully! <a href="/">click</a>';

    }
}
