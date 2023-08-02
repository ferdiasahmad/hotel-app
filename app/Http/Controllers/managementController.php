<?php

namespace App\Http\Controllers;

use App\Models\management;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class managementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $management = management::all();
       return view('management.index',compact('management'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $management = management::all();
        return view('management.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $management = New management();

        $management->username = $request->username;
        $management->password = Hash::make($request->password);
        $management->level = $request->level;

        $management->save();
        Alert::success('Success','Data added successfully!');
        return redirect('/management');
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
        $management = management::findOrFail($id);

        return view('management.edit',compact('management'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $management = management::findOrFail($id);

        $management->username = $request->username;
        $management->password = Hash::make($request->password);
        $management->level = $request->level;

        $management->save();
        Alert::success('Success','Data edited successfully!');
        return redirect('/management');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $management = management::findOrFail($id);

        $management->delete();
        Alert::success('Success','Data Deleted successfully!');
        return redirect('/management');
    }
}
