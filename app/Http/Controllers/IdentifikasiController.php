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
}
