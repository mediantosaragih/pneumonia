<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipeBelajar;

class PembelajaranController extends Controller
{
    public function index(){

        $tipe_belajars = TipeBelajar::orderBy('kategori', 'ASC')->get();

        return view('admin.kelolaPembelajaran', compact('tipe_belajars'));
    }

    public function indexCreate(){
        $tipe_belajar = TipeBelajar::orderBy('kategori', 'ASC')->get();

        return view('admin.createPembelajaran', compact('tipe_belajar'));
    }

    public function create(Request $request){
        $this->validate($request, [
            'kode_belajar' => 'required|string|max:155',
            'kategori' => 'required',
            'keterangan' => 'required'
        ]);
        

        $tipe_belajar = TipeBelajar::create([
            'kode_belajar' => $request->kode_belajar,
            'kategori' => $request->kategori,
            'keterangan' => $request->keterangan,
        ]);

        if ($tipe_belajar) {
            return redirect()
                ->intended('/kelolaPembelajaran')
                ->with([
                    'success' => 'Tipe pembelajaran baru ditambahkan'
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

    public function edit($id){
        $tipe_belajar = TipeBelajar::find($id);
        // dd($kepribadian);
        return view('admin.updatePembelajaran')->with('tipe_belajar', $tipe_belajar);
    }

    public function update(Request $request){
        $tipe_belajar = TipeBelajar::find($request->id);
        // dd($kepribadian);
        $this->validate($request, [
            'kode_belajar' => 'required|string|max:155',
            'kategori' => 'required',
            'keterangan' => 'required'
        ]);
        $tipe_belajar->update($request->all());

        if ($tipe_belajar) {
            return redirect()
                ->intended('/kelolaPembelajaran')
                ->with([
                    'success' => 'Tipe Belajar diupdate'
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

    public function destroy($id){
        $tipe_belajar = TipeBelajar::find($id);
        $tipe_belajar->delete();
        if ($tipe_belajar) {
            return redirect()
            ->intended('/kelolaPembelajaran')
                ->with([
                    'success' => 'Data has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
        return redirect('/kelolaPembelajaran')->with('success', 'Data has been deleted!');
    }
}