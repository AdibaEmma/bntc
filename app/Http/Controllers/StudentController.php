<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {

        return view('student.index');
    }


    public function show() {
        
        return view('student.profile');
    }
}
