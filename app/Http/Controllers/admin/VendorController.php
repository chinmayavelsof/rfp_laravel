<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRegisterRequest;
use App\Models\User;
use App\Models\Vendor;
use App\Models\VendorCategoryMapping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    /**
     * Display a listing of the vendors.
     */
    public function index()
    {
        return view('admin.vendors.index');
    }

    /**
     * Show the form for creating a new vendors.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created vendors in storage.
     */
    public function register(VendorRegisterRequest $request)
    {
        DB::beginTransaction();

        try {
            // 1️. Create vendor user
            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $user->assignRole('vendor');
            Auth::login($user);
            // 2️. Create vendor record
            $vendor = Vendor::create([
                'user_id' => $user->id,
                'revenue' => $request->revenue,
                'total_employees' => $request->noofemployees,
                'gst_no' => $request->gstno,
                'pan_no' => $request->panno,
                'contact' => $request->phoneno,
            ]);

            // 3️. Save vendor category mappings
            if ($request->has('categories') && is_array($request->categories)) {
                $data = [];
                foreach ($request->categories as $categoryId) {
                    $data[] = [
                        'vendor_id' => $vendor->id,
                        'category_id' => $categoryId,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
                VendorCategoryMapping::insert($data);
            }

            DB::commit();

            // Redirect to dashboard with a success message
            return redirect()
                ->route('vendor.dashboard')
                ->with('success', 'Vendor registered successfully!');

        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()
                ->route('vendor.dashboard')
                ->with('Error', 'Something went wrong please try again later.');
        }
    }

    /**
     * Display the specified vendors.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified vendors.
     */
    public function edit()
    {
       return view('admin.vendors.edit');
    }

    /**
     * Update the specified vendors in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified vendors from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
