<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRegisterRequest;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function register(AdminRegisterRequest $request)
    {
        try {
            // Create user
            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'admin',
                'status' => 'Inactive'
            ]);

            // Redirect to dashboard with a success message
            return redirect()
                ->route('dashboard')
                ->with('success', 'Admin registered successfully!');

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
