<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HistoryController extends Controller
{
    public function index(){

        $user = User::find(Auth::user()->id);

        $histories_in_array = DB::table('histories')
        ->join('users', 'users.id','=','histories.user_id')
        ->select('histories.*','users.username')
        ->get();
        $historys = $histories_in_array->toArray();
        $kepribadian=[];
        // foreach($historys as $x=>$item){
        //     $kepribadian = DB::table()
        // }
        // $historys->kepribadian_id = json_decode($historys->kepribadian_id);
        // dd($historys->kepribadian_id);
        // dd($historys);
        return view('admin.history', compact('historys','user'));
    }
}
