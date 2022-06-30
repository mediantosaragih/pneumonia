<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Komentar;
use Carbon\Carbon;
use App\Models\History;
use App\Models\Balasan;
use Illuminate\Support\Facades\Validator;

class KomentarController extends Controller
{
    public function index(){

        $komentars = Komentar::orderby('created_at', 'DESC')->get();
        $harian = History::where('history_date', Carbon::now()->format('Y-m-d'))->count();
        $bulanan = History::whereDate('created_at','>', Carbon::now()->subMonth())->count();
        $all = History::all()->count();
        // dd($komentars);
        return view('admin.layananPertanyaan', compact('komentars'))
                                    ->with('harian', $harian)
                                    ->with('bulanan', $bulanan)
                                    ->with('all', $all);
    }

    public function balas($id){
        $komentars = Komentar::find($id);
        
        $harian = History::where('history_date', Carbon::now()->format('Y-m-d'))->count();
        $bulanan = History::whereDate('created_at','>', Carbon::now()->subMonth())->count();
        $all = History::all()->count();
        return view('admin.balasPertanyaan', compact('komentars'))
                                    ->with('harian', $harian)
                                    ->with('bulanan', $bulanan)
                                    ->with('all', $all);
    }

    public function kirim(Request $request){
        $validate = Validator::make($request->all(), [
            'balasan' => "required",
        ]);
        if ($validate->fails()) {
            return back()->withInput()->withErrors($validate);
        }
        
        $balasan = Balasan::create([
            'komentar_id' => $request->komentar_id,
            'balasan' => $request->balasan
        ]);
        return redirect('/layananPertanyaan');
    }
}
