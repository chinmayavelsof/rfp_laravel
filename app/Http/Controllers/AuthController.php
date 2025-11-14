<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Stringable;

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
    public function loginSubmit(UserLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $user = Auth::user();

            // Role-based redirect
            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard')->with('success', 'Admin Logged in successfully!');
            } elseif ($user->hasRole('vendor')) {
                return redirect()->route('vendor.dashboard')->with('success', 'Vendor Logged in successfully!');
            } else {
                return redirect()->route('login')->with('error', 'Something went wrong, Please try again later');
            }
        }
        return redirect()->route('login')->with('error', 'The provided credentials do not match our records.');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }

    public function showLinkRequestForm()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        
        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['success' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }

    public function showResetForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                ])->save();
            }
        );

        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('success', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
}
