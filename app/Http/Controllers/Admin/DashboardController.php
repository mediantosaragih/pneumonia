<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\History;

class DashboardController extends Controller
{
    public function index(){

        $history = History::orderBy('history_date', 'DESC')->get();
        $harian = History::where('history_date', Carbon::now()->format('Y-m-d'))->count();
        $bulanan = History::whereDate('created_at','>', Carbon::now()->subMonth())->count();
        $all = History::all()->count();
        
        return view('admin.dashboard',compact('history'))
                            ->with('harian', $harian)
                            ->with('bulanan', $bulanan)
                            ->with('all', $all);
    }
}
