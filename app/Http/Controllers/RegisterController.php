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
        dd($request->all());
        $validate = $request->validate([
            'username' => "required",
            'tanggal_lahir' => "required",
            'pekerjaan' => "required",
            'email' => "required",
            'no_telp' => "required",
            'password' => "required|min:6|max:255"
        ]);

        if ($validate->fails()) {
            return redirect('/register')
                        ->withErrors($validate)
                        ->withInput();
        }
        $validate['password'] = bcrypt($validate['password']);
        $user =User::create($validate);

        $pengunjung = Pengunjung::create([
            'user_id' => $user->id,
            'nama' => $request->username,
            'tanggal_lahir' => $request->tanggal_lahir,
            'pekerjaan' => $request->pekerjaan,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
        ]);

        $request->session()->flash('success', 'Registrasi Succsess! please login');
        return redirect('/login');
    }
}
