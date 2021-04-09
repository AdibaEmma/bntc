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

    public function all_requests() {

        return view('admin.all_request');
    }

    public function add_book() {

        return view('admin.add_book');
    }

    public function add_shelf() {

        return view('admin.add_shelf');
    }

    public function add_cupboard() {

        return view('admin.add_cupboard');
    }    
}
