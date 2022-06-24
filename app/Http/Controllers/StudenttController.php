<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudenttController extends Controller
{
    //
    public function index(){
        return view('student.dashboard1');
    }
}
