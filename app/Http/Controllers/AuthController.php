<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        $this->validate($request, [
            'email' =>  'required|email|unique:users',
            'password'  =>  'required',
        ]);
        $user = User::add($request->all());
        $user->generatePassword($request->get('password'));
        return redirect('/login');
    }
    public function loginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' =>  'required|email',
            'password'  =>  'required',
        ]);
        if(Auth::attempt([
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        ])){
            return redirect('/');
        }

        return redirect()->back()->with('status', 'Not correct login or password!');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
