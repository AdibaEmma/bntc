<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function index() {
        return view('auth.admin.login');
    }

    public function store(Request $request,) {

        $this->validate($request, [
            'email'=>'required|email',
            'password' => 'required'
         ]);

       if ( !auth()->attempt($request->only('email', 'password')) ) {

            return back()->with('status', 'Invalid login details');

       }


        return redirect()->route('admin.dashboard', auth()->user());
    }
}
