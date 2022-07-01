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
        $dominance = array_fill(0, 12, NULL);
        $influence = array_fill(0, 12, NULL);
        $steadiness = array_fill(0, 12, NULL);
        $compliance = array_fill(0, 12, NULL);
        foreach($data as $item){
            if($item->month == 1 && $item->hasil == 'Dominance'){
                $dominance[0] = $dominance[0]+1;
            }if($item->month == 2 && $item->hasil == 'Dominance'){
                $dominance[1] = $dominance[1]+1;
            }if($item->month == 3 && $item->hasil == 'Dominance'){
                $dominance[2] = $dominance[2]+1;
            }if($item->month == 4 && $item->hasil == 'Dominance'){
                $dominance[3] = $dominance[3]+1;
            }if($item->month == 5 && $item->hasil == 'Dominance'){
                $dominance[4] = $dominance[4]+1;
            }if($item->month == 6 && $item->hasil == 'Dominance'){
                $dominance[5] = $dominance[5]+1;
            }if($item->month == 7 && $item->hasil == 'Dominance'){
                $dominance[6] = $dominance[6]+1;
            }if($item->month == 8 && $item->hasil == 'Dominance'){
                $dominance[7] = $dominance[7]+1;
            }if($item->month == 9 && $item->hasil == 'Dominance'){
                $dominance[8] = $dominance[8]+1;
            }if($item->month == 10 && $item->hasil == 'Dominance'){
                $dominance[9] = $dominance[9]+1;
            }if($item->month == 11 && $item->hasil == 'Dominance'){
                $dominance[10] = $dominance[10]+1;
            }if($item->month == 12 && $item->hasil == 'Dominance'){
                $dominance[11] = $dominance[11]+1;
            }

            if($item->month == 1 && $item->hasil == 'Influence'){
                $influence[0] = $influence[0]+1;
            }if($item->month == 2 && $item->hasil == 'Influence'){
                $influence[1] = $influence[1]+1;
            }if($item->month == 3 && $item->hasil == 'Influence'){
                $influence[2] = $influence[2]+1;
            }if($item->month == 4 && $item->hasil == 'Influence'){
                $influence[3] = $influence[3]+1;
            }if($item->month == 5 && $item->hasil == 'Influence'){
                $influence[4] = $influence[4]+1;
            }if($item->month == 6 && $item->hasil == 'Influence'){
                $influence[5] = $influence[5]+1;
            }if($item->month == 7 && $item->hasil == 'Influence'){
                $influence[6] = $influence[6]+1;
            }if($item->month == 8 && $item->hasil == 'Influence'){
                $influence[7] = $influence[7]+1;
            }if($item->month == 9 && $item->hasil == 'Influence'){
                $influence[8] = $influence[8]+1;
            }if($item->month == 10 && $item->hasil == 'Influence'){
                $influence[9] = $influence[9]+1;
            }if($item->month == 11 && $item->hasil == 'Influence'){
                $influence[10] = $influence[10]+1;
            }if($item->month == 12 && $item->hasil == 'Influence'){
                $influence[11] = $influence[11]+1;
            }

            if($item->month == 1 && $item->hasil == 'Steadiness'){
                $steadiness[0] = $steadiness[0]+1;
            }if($item->month == 2 && $item->hasil == 'Steadiness'){
                $steadiness[1] = $steadiness[1]+1;
            }if($item->month == 3 && $item->hasil == 'Steadiness'){
                $steadiness[2] = $steadiness[2]+1;
            }if($item->month == 4 && $item->hasil == 'Steadiness'){
                $steadiness[3] = $steadiness[3]+1;
            }if($item->month == 5 && $item->hasil == 'Steadiness'){
                $steadiness[4] = $steadiness[4]+1;
            }if($item->month == 6 && $item->hasil == 'Steadiness'){
                $steadiness[5] = $steadiness[5]+1;
            }if($item->month == 7 && $item->hasil == 'Steadiness'){
                $steadiness[6] = $steadiness[6]+1;
            }if($item->month == 8 && $item->hasil == 'Steadiness'){
                $steadiness[7] = $steadiness[7]+1;
            }if($item->month == 9 && $item->hasil == 'Steadiness'){
                $steadiness[8] = $steadiness[8]+1;
            }if($item->month == 10 && $item->hasil == 'Steadiness'){
                $steadiness[9] = $steadiness[9]+1;
            }if($item->month == 11 && $item->hasil == 'Steadiness'){
                $steadiness[10] = $steadiness[10]+1;
            }if($item->month == 12 && $item->hasil == 'Steadiness'){
                $steadiness[11] = $steadiness[11]+1;
            }

            if($item->month == 1 && $item->hasil == 'Compliance'){
                $compliance[0] = $compliance[0]+1;
            }if($item->month == 2 && $item->hasil == 'Compliance'){
                $compliance[1] = $compliance[1]+1;
            }if($item->month == 3 && $item->hasil == 'Compliance'){
                $compliance[2] = $compliance[2]+1;
            }if($item->month == 4 && $item->hasil == 'Compliance'){
                $compliance[3] = $compliance[3]+1;
            }if($item->month == 5 && $item->hasil == 'Compliance'){
                $compliance[4] = $compliance[4]+1;
            }if($item->month == 6 && $item->hasil == 'Compliance'){
                $compliance[5] = $compliance[5]+1;
            }if($item->month == 7 && $item->hasil == 'Compliance'){
                $compliance[6] = $compliance[6]+1;
            }if($item->month == 8 && $item->hasil == 'Compliance'){
                $compliance[7] = $compliance[7]+1;
            }if($item->month == 9 && $item->hasil == 'Compliance'){
                $compliance[8] = $compliance[8]+1;
            }if($item->month == 10 && $item->hasil == 'Compliance'){
                $compliance[9] = $compliance[9]+1;
            }if($item->month == 11 && $item->hasil == 'Compliance'){
                $compliance[10] = $compliance[10]+1;
            }if($item->month == 12 && $item->hasil == 'Compliance'){
                $compliance[11] = $compliance[11]+1;
            }
        }
        // dd($influence);
        return view('admin.dashboard',compact('history','user','data'))
                            ->with('harian', $harian)
                            ->with('bulanan', $bulanan)
                            ->with('all', $all)
                            ->with('dominance', $dominance)->with('influence', $influence)->with('steadiness', $steadiness)->with('compliance', $compliance);
    }
}
