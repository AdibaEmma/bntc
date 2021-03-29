<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminRegisterController extends Controller
{
    public function index() {
        return view('auth.admin.register');
    }


    public function store(Request $request) {

        $this->validate($request, [
           'name'=>'required|max:255',
           'email'=>'required|email|max:255',
           'contact'=>'required|numeric',
           'password'=>'required|confirmed',
        ]);
  
        Admin::create([
           'name' => $request->name,
           'email' => $request->email,
           'contact' => $request->contact,
           'password' => Hash::make($request->password)
        ]);
  
        auth()->attempt($request->only('email', 'password'));
  
        return redirect()->route('admin.dashboard', auth()->admin());
     }
}
