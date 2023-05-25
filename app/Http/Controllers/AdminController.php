<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = customer::all();
        return view('admin.index',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer = customer::all();
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $customer = New customer();

        $customer->username = $request->username;
        $customer->email = $request->email;
        $customer->no_telp = $request->no_telp;
        $customer->password = Hash::make($request->password);

        $customer->save();
        Alert::success('Success','Data added successfully!');
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = customer::findOrFail($id);

        return view('admin.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = customer::findOrFail($id);

        $customer->username = $request->username;
        $customer->email = $request->email;
        $customer->no_telp = $request->no_telp;
        $customer->password = Hash::make($request->password);

        $customer->save();
        Alert::success('Success','Data edited successfully!');
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = customer::findOrFail($id);

        $customer->delete();
        return redirect('/customer');
    }
}
