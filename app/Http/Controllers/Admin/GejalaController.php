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

        $this->validate($request, [
            'kode' => 'required|string|max:155',
            'name' => 'required',
            'kategori' => 'required'
        ]);
        $poin = 0;
        if($request->kategori == 'Ringan')
        {
            $poin = 1;
        }elseif($request->kategori == 'Sedang')
        {
            $poin = 2;
        }elseif($request->kategori == 'Berat')
        {
            $poin = 3;
        }

        $gejala = Gejala::create([
            'kode' => $request->kode,
            'name' => $request->name,
            'kategori' => $request->kategori,
            'poin' => $poin
        ]);

        if ($gejala) {
            return redirect()
                ->intended('/keloladiagnosa')
                ->with([
                    'success' => 'New Gejala has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }

        return view('admin.keloladiagnosa');
    }
}
