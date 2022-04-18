<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengobatan;

class PengobatanController extends Controller
{
    public function index(){

        $pengobatans = Pengobatan::orderBy('kategori', 'ASC')->get();

        return view('admin.kelolapengobatan', compact('pengobatans'));
    }

    public function create(Request $request){

        $this->validate($request, [
            'nama_pengobatan' => 'required|string|max:155',
            'kategori' => 'required',
            'deskripsi' => 'required'
        ]);

        $pengobatan = Pengobatan::create([
            'nama_pengobatan' => $request->nama_pengobatan,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi
        ]);

        if ($pengobatan) {
            return redirect()
                ->intended('/kelolapengobatan')
                ->with([
                    'success' => 'New Pengobatan has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }
}
