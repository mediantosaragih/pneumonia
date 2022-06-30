<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index(){

        $user = User::find(Auth::user()->id);
        $historys = History::orderby('created_at','DESC')->get();

        // $historys->kepribadian_id = json_decode($historys->kepribadian_id);
        // dd($historys->kepribadian_id);
        return view('admin.history', compact('historys','user'));
    }
}
