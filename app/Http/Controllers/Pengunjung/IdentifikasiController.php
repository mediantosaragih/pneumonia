<?php

namespace App\Http\Controllers\Pengunjung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identifikasi;
use App\Models\History;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;

class IdentifikasiController extends Controller
{
    public function index(){
        $identifikasis = Identifikasi::orderBy('id', 'ASC')->get();
        $user = User::find(Auth::user()->id);
       
        return view('pengunjung.identifikasi', compact('identifikasis','user'));
    }

    public function check(Request $request){
        // dd($request->all());
        $kode_nama_get_req = [];
        $identifikasis = DB::table('identifikasis')->select('*')->get();
        foreach($identifikasis as $item){
            $kode_fix = $item->kode;
            $kode_kepribadian = new \stdClass;
            $kode_kepribadian = $request->$kode_fix;
            array_push($kode_nama_get_req, $kode_kepribadian);
        }
        $history = History::create([
            'user_id' => Auth::user()->id,
            'kepribadian_id' => $request->kepribadian,
            'poin' => $kode_nama_get_req,
            'history_date' => Carbon::now()->format('Y-m-d')
        ]);
        
        return redirect()->route('hasilIdentifikasi',[
            'history' => $history
        ]);
    }

    public function hasil(Request $request){
        $user = User::find(Auth::user()->id);
        return view('pengunjung.hasilIdentifikasi', compact('user'),[
            'history' => $request->history
        ]);
    }
}
