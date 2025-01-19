<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthManager extends Controller
{
    function home(){
        return view('home');
    }

    function registration(){
        return view('auth.register');
    }
    
    function login(){
        return view('auth.login');
    }

    function loginAuthentication(Request $request){
        $dataCheck = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($dataCheck)){
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }

        return back()->with('loginError', 'Email or password is incorrect');
    }

    function createUser(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|email:dns',
            'phone_number' => 'required',
            'role' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'phone_number' => $request->phone_number
        ];

        User::create($data);

        if(!$user){
            return redirect(route('register'))->with("error","Registration failed, Try again!");
        }

        $request->session()->flash('success', 'Registration successfully, please login');

        return redirect(route('auth.login'));
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/home');
    }
}
