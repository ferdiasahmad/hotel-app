<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginrRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('home.login');
    }

    public function login(LoginrRequest $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' =>['required']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return redirect()->back()->with('fail', 'Email Atau Password Salah!', );
    }

    public function showRegistrationForm()
    {
        return view('home.register');
    }

    public function register(RegisterRequest $request)
    {
        // $request->validate([
        //     [
        //         'username' => 'required',
        //         'email' => 'required|email|unique:users',
        //         'no_telp' => 'required',
        //         'password' => 'required|min:8',
        //         'password_confirm' => 'nullable|same:password'
        //     ],
        //     [
        //         'password.confirmed' => 'Password belum sama !',
        //         'password_confirm.confirmed' => 'password belum sama !',
        //         'username.required' => 'username belum diisi !',
        //         'email.required' => 'email belum diisi !',

        //     ]
        // ]);
        // $rules =[
        //     'username' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'no_telp' => 'required',
        //     'password' => 'required|min:8',
        //     'password_confirm' => 'nullable|same:password'
        // ];

        // $customMessages =[
        //     'password.confirmed' => 'Password belum sama !',
        //     'password_confirm.confirmed' => 'password belum sama !',
        //     'username.required' => 'username belum diisi !',
        //     'email.required' => 'email belum diisi !',

        // ];
        // $this->validate($request, $rules, $customMessages);


        $User = new customer();
        $User->email = $request->email;
        $User->username = $request->username;
        $User->no_telp = $request->no_telp;
        if ($request->password !== null) {
            $User->password = Hash::make($request->password);
        }

        $User->save();

        return redirect()->route('login')->with('messageSuccess', 'Berhasil daftar');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
