<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\reservation;
use App\Models\room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class frontEnd extends Controller
{
    public function index()
    {
        $room = room::where('status',1)->get();
        return view('home.home',compact('room'));
    }
    public function detailRoom($id)
    {
        $room = room::findOrFail($id);
        return view('home.detailRoom',compact('room'));
    }
    public function booking($id)
    {
        $room = room::findOrFail($id);
       return view('home.booking',compact('room','id'));
    }
    public function history()
    {
        $customer = customer::where('id',Auth::user()->id)->get();
        $reservation = reservation::where('customer_id',Auth::user()->id)->get();
        return view('home.history',compact('customer','reservation'));
    }
    public function Payment($id)
    {
        return view('home.payment',compact('id'));
    }

    public function submitbooking(Request $request)
    {
        // $rules =[
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'date_in' => 'required',
        //     'date_out' => 'required',
        // ];

        // $customMessages =[
        //     'name.confirmed' => 'name belum diisi !',
        //     'email.confirmed' => 'email belum diisi !',
        //     'date_in.confirmed' => 'date in belum diisi !',
        //     'date_out.required' => 'date out belum diisi !',

        // ];
        // $this->validate($request, $rules, $customMessages);
        // $customer = customer::where('id',Auth::user()->id)->get();
        $room = room::findOrFail($request->room_id);
        $reservation = new reservation();
        $date = Carbon::parse($request->date_in);
        $now = Carbon::parse($request->date_out);

        $diff = $date->diffInDays($now);
        $reservation->date_in =$request->date_in;
        $reservation->date_out=$request->date_out;
        $reservation->total_payment=$room->price*$diff;
        $reservation->customer_id=Auth::user()->id;
        $reservation->room_id=$request->room_id;
        $reservation->status='0';
        $reservation->name=$request->name;
        $reservation->email=$request->email;

        $reservation->save();
        return redirect('/dashboard/history');
    }

    public function uploadpayment( Request $request, $id)
    {

        $reservation = reservation::findOrfail($id);

        if ($request->hasFile('invoice')){
            $file = $request->file('invoice');
            $fileName = $file->getClientOriginalName();

            $file->move(public_path('image'), $fileName);
            $reservation->invoice = $fileName;
        }
        $reservation->save();
        return redirect()->route('history');
    }
    public function receipt($id)
    {
        $reservation=reservation::findOrFail($id);
            return view('home.receipt',compact('reservation'));
    }
}
