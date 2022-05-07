<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\User;

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
        // $this->validate($request, [
        //     'nama' => 'required',
        //     'no_telp' => 'required',
        //     'alamat' => 'required'
        // ]);
        // dd($request->gejala);
        foreach ($request->gejala as $data) {
            $gejala = Gejala::find($data);
            if($gejala->kategori == "Ringan"){
                $ringan += 1;
            }else if($gejala->kategori == "Sedang"){
                $sedang += 1;
            }else if($gejala->kategori == "Berat"){
                $berat += 1;
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
