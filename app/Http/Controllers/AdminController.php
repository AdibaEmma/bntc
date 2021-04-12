<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
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

    public function add_book(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'author' => 'required|alpha',
            'type' => 'required',
            'image' => 'image|nullable|max:1999',
            'description' => 'nullable'
        ]);

        if( $request->hasFile('image') ) {

            // get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalImage();

            // get only filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILE);

            // get extension
            $extension = $request->file('image')->getClientExtension();

            $filenameToStore = $filename.'_'.time().'.'.$extension;


            $image_path = $request->file('image')->storeAs('public/images/books', $filenameToStore);

        }

        $book = new Book([
                'title' => $request->name,
                'author'=> $request->author,
                'type' => $request->type,
                'shelf' => $request->shelf,
                'image_path' => $image_path,
                'description' => $request->description
            ]);

            $book->save();

        return back();
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

        return back();
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

        return back();
    } 
}
