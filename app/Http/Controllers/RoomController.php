<?php

namespace App\Http\Controllers;

use App\Models\room;
use App\Models\management;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\New_;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $room = room::all();
        $management = management::all();

        return view('room.index',compact('room', 'management'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $room = room::all();
        $user = management::where('level', 'admin')->get();

        return view('room.create',compact('room','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $room = new room();

        $room->description =$request->description;
        $room->price =$request->price;
        $room->status=$request->status;
        $room->name =$request->name;
        $room->management_id = Auth::guard('admin')->user()->id;

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();

            $file->move(public_path('image'), $fileName);
            $room->image = $fileName;
        }
        $room->save();
        Alert::success('Success','Data added successfully!');
        return redirect('/room');
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
        $room = room::findOrFail($id);
        return view('room.edit',compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $room = room::findOrFail($id);

        $room->description =$request->description;
        $room->price =$request->price;
        $room->status=$request->status;
        $room->name =$request->name;
        $room->management_id=Auth::guard('admin')->user()->id;

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();

            $file->move(public_path('image'), $fileName);
            $room->image = $fileName;
        }

            $room->save();
            Alert::success('Success','Data edit successfully!');
            return redirect('/room');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room = room::findOrFail($id);

        $room->delete();
        Alert::success('Success','Data Deleted successfully!');
        return redirect('/room');
    }
}
