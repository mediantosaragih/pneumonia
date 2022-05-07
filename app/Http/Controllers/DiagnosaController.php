<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\User;
use App\Models\Pengunjung;
use App\Models\History;

class DiagnosaController extends Controller
{
    public function index(){
        $gejalas = Gejala::orderBy('kategori', 'ASC')->get();

        return view('diagnosa',compact('gejalas') );
    }

    public function check(Request $request){
        $ringan = 0;
        $sedang =0;
        $berat=0;
        $this->validate($request, [
            'name' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required'
        ]);

        $pengunjungs = Pengunjung::create([
            'name' => $request->name,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat
        ]);

        $pengunjung = Pengunjung::latest('created_at')->first();        
        // dd($request->gejala);
        if($request->gejala != null){
            foreach ($request->gejala as $data) {
                $gejala = Gejala::find($data);
                $history = History::create([
                    'pengunjung_id' => $pengunjung->id,
                    'gejala_id' => $data,
                    'history_date' => $pengunjung->created_at
                ]);
                if($gejala->kategori == "Ringan"){
                    $ringan += 1;
                }else if($gejala->kategori == "Sedang"){
                    $sedang += 1;
                }else if($gejala->kategori == "Berat"){
                    $berat += 1;
                }
            }
        }
        if($ringan > $sedang && $ringan > $berat){
            dd("ringan bos");
        }if($sedang >= $ringan && $sedang > $berat){
            dd("sedang");
        }if($berat >= $ringan && $berat >= $sedang){
            dd("bawa rs");
        }if($ringan == 0 && $sedang == 0 && $berat == 0){
            dd("bukan pneumonia");
        }


        
    }
}
