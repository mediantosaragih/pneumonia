<?php

namespace App\Http\Controllers\Pengunjung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kepribadian;
use App\Models\History;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;

class IdentifikasiController extends Controller
{
    public function index(){
        $kepribadians = Kepribadian::orderBy('kategori', 'ASC')->get();
        $user = User::find(Auth::user()->id);
        // dd($kepribadians);
        return view('pengunjung.identifikasi', compact('kepribadians','user'));
    }

    public function check(Request $request){
        // dd($request->all());
        $kode_nama_get_req = [];
        $kepribadians = DB::table('kepribadians')->select('*')->get();
        foreach($kepribadians as $item){
            $kode_fix = $item->kode;
            $kode_kepribadian = new \stdClass;
            $kode_kepribadian = $request->$kode_fix;
            array_push($kode_nama_get_req, $kode_kepribadian);
        }
        $history = History::create([
            'user_id' => Auth::user()->id,
            'kepribadian_id' => $request->id,
            'poin' => $kode_nama_get_req,
            'history_date' => Carbon::now()->format('Y-m-d')
        ]);
        
        return redirect()->route('hasilIdentifikasi',[
            'history' => $history
        ]);
    }

    public function hasil(Request $request){
        
        return view('pengunjung.hasilIdentifikasi',[
            'history' => $request->history
        ]);
    }
}
