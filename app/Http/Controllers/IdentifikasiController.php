<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;

class IdentifikasiController extends Controller
{
    public function index(){
        $gejalas = Gejala::orderBy('kategori', 'ASC')->get();

        return view('identifikasi',compact('gejalas') );
    }

    public function check(Request $request){
        
        // $pengunjung = Pengunjung::create([
        //     data pengunjung
        // ])

        // $pengunjung = Pengunjung::latest('created_at')->first();

        // $f($request->kepribadian != null){
        //     foreach ($request->gejala as $data) {
        //         $kepribadian = Kepribadian::find($data);
        //         $history = History::create([
        //             'pengunjung_id' => $pengunjung->id,
        //             'kepribadian_id' => $data,
        //             'history_date' => $pengunjung->created_at
        //         ]);
        //     }
        // }

        // $totalPlegmatis = Kepribadian::where("kategori",'plegmatis')->count("kategori");
        // $plegmatis = history::where('pengunjung_id', $pengunjung->id)->count('kepribadian_id');

        // $persenPleg = $totalPlegmatis/$plegmatis;


    }
}
