<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Shelf;
use App\Models\Cupboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function index() {

        $cupboards = Cupboard::get();
        $shelves = Shelf::get();
        $users = User::get();

        return view('admin.index', [
            'cupboards' => $cupboards,
            'shelves' => $shelves,
            'students' => $users
        ]);
    }

    public function show() {

        return view('admin.profile');
    }

    public function get_students() {

        $students = User::get();

        $count = 1;

        return view('admin.get_users', [
            'students' => $students,
            'count' => $count
        ]);
    }

    public function all_requests() {

        return view('admin.all_request');
    }

    public function all_books() {

        return view('admin.all_books');
    }

    public function book_view() {

        $shelves = Shelf::get();


        return view('admin.add_book', [
            'shelves' => $shelves
        ]);
    }

    public function add_book() {

        return view('admin.add_book');
    }

    public function shelf() {

        $cupboards = Cupboard::get();
        return view('admin.add_shelf', [
            'cupboards' => $cupboards,
        ]);
    }

    public function add_shelf(Request $request) {

       $this->validate($request, [
           'name' => 'required',
           'cupboard' => 'required'
       ]);

    //    dd($request->all());

        Shelf::create([
            'name' => $request->name,
            'cupboard_id' => $request->cupboard,
        ]);

        return redirect()->route('admin.dashboard', auth()->user());
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
