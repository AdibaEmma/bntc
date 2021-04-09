<?php

namespace App\Http\Controllers;

use App\Models\Cupboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


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

    public function all_books() {

        return view('admin.all_books');
    }

    public function add_book() {

        return view('admin.add_book');
    }

    public function add_shelf() {

        return view('admin.add_shelf');
    }

    public function cupboard() {

        return view('admin.add_cupboard');
    }
    
    public function add_cupboard(Request $request) {

        $this->validate($request, [
            'name'=>'required|max:255',
         ]);

        Cupboard::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.dashboard', auth()->user());
    } 
}
