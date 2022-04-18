<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gejala;


class GejalaController extends Controller
{
    public function index(){

        $gejalas = Gejala::orderBy('kategori', 'ASC')->get();

        return view('admin.keloladiagnosa', compact('gejalas'));
    }

    public function create(Request $request){
        $data = $request->all();
        // dd($data['kategori']);

        return view('admin.keloladiagnosa');
    }
}
