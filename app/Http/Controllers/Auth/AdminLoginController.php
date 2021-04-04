<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminLoginController extends Controller
{
    public function index() {

        return view('auth.admin.login');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'email'=>'required|email',
            'password' => 'required'
         ]);

       if ( !auth()->attempt($request->only('email', 'password')) ) {

            return back()->with('status', 'Invalid login details');

       }

        $request->session()->regenerate();

        return redirect()->route('admin.dashboard', auth()->user()->name);
    }

    public function locked() {

        return view('auth.admin.lockscreen');

    }

    public function unlock() {

        if(!Hash::check($request->password, $request->user()->password)) {

            return back()->withErrors([
                'password' => ['The provided password does not match our records.']
            ]);
        }

        $request->session()->passwordConfirmed();

        return redirect()->intended();
    }
}
