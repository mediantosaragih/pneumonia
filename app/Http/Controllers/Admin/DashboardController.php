<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\History;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $user = User::find(Auth::user()->id);
        $history = History::orderBy('history_date', 'DESC')->get();
        $harian = History::where('history_date', Carbon::now()->format('Y-m-d'))->count();
        $bulanan = History::whereDate('created_at','>', Carbon::now()->subMonth())->count();
        $all = History::all()->count();

        $data = History::select(DB::raw('hasil'), DB::raw("DATE_FORMAT(created_at, '%m-%Y') new_date"),  DB::raw('YEAR(created_at) year, MONTH(created_at) month'))->get();
        // dd($data);
        
        return view('admin.dashboard',compact('history','user','data'))
                            ->with('harian', $harian)
                            ->with('bulanan', $bulanan)
                            ->with('all', $all);
    }
}
