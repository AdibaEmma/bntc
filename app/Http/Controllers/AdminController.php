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

        $books = Book::get();
        $count = 1;
        return view('admin.all_books', [
            'books' => $books,
            'count' => $count
        ]);
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
            'author' => 'required',
            'type' => 'required',
            'shelf_id' => 'required',
            'image' => 'image|nullable|max:1999',
            'description' => 'nullable'
        ]);

        if( $request->hasFile('image') ) {

            // get filename with extension
            $filenameWithExt = $request->image->getClientOriginalName();

            // get only filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // get extension
            $extension = $request->image->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'.'.$extension;


            $request->image->storeAs('images', $filenameToStore, 'public');

        }

        
        $book = new Book([
                'title' => $request->title,
                'author'=> $request->author,
                'type' => $request->type,
                'shelf_id' => $request->shelf_id,
                'image_path' => $filenameToStore,
                'description' => $request->description
            ]);

            $book->save();

        return redirect()->route('admin.all_books', auth()->user());
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
