<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        //
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
