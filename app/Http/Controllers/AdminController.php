<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        return view('admin.index');
    }

    public function show() {

        return view('admin.profile');
    }

    public function get_students() {

        return view('admin.get_users');
    }


    public function add_book() {

        return view('admin.add_book');
    }
}
