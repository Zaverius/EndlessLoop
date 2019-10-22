<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class CustomLoginController extends Controller
{
	use AuthenticatesUsers;

    public function index() {
    	return view('admin.login');
    }

    public function logIn(Request $request) {

		$request->validate([
			'email'=>'required|email',
			'password'=>'required|alphaNum|min:3'
        ]);

		$credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
        	return redirect('admin');
        } else {
        	return back()->with('wrongCredentials', 'Wrong username or password');
        }
    }

    public function logOut() {
    	Auth::logout();
    	return redirect('admin/login');
    }
}
