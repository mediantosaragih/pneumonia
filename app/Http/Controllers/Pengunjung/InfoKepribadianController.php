<?php

namespace App\Http\Controllers\Pengunjung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class InfoKepribadianController extends Controller
{
    public function index(){
        $user = User::find(Auth::user()->id);
        return view('pengunjung.kepribadian',compact('user'));
    }
}
