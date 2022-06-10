<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){

        return view('register');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'username' => "required",
            'email' => "required|email:dns|unique:users",
            'password' => "required|min:6|max:255"
        ]);

        if ($validate->fails()) {
            return redirect('/register')
                        ->withErrors($validate)
                        ->withInput();
        }
        $validate['password'] = bcrypt($validate['password']);
        User::create($validate);

        $request->session()->flash('success', 'Registrasi Succsess! please login');
        return redirect('/login');
    }
}
