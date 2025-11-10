<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.index');
    }
    public function register_vendor(){
        return view('auth.register_vendor');
    }
    public function register_admin(){
        return view('auth.register_admin');
    }
    public function logout() {
        return redirect()->route('login');
    }
}
