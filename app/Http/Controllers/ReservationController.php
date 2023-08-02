<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\reservation;
use App\Models\room;
use Alert;
use App\Models\management;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservation=reservation::with(['room','customer','management'])->get();
        return view('admin.historyadmin',compact('reservation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $reservation = reservation::findOrFail($id);
        return view('admin.historyedit',compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $reservation = reservation::findOrFail($id);
        $room = room::findOrfail($reservation->room_id);
        if($request->status=='1'){

            $room->status='0';
            $room->save();
        }

        $reservation->status=$request->status;
        $reservation->management_id=Auth::guard('admin')->user()->id;
        $reservation->save();

        Alert::success('Success','Data edited successfully!');
        return redirect('/history');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
