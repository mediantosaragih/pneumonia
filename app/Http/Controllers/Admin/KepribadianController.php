<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kepribadian;

class KepribadianController extends Controller
{
    public function index(){

        $kepribadians = Kepribadian::orderBy('kategori', 'ASC')->get();

        return view('admin.kelolaIdentifikasi', compact('kepribadians'));
    }

    public function indexCreate(){
        $kepribadians = Kepribadian::orderBy('kategori', 'ASC')->get();

        return view('admin.createIdentifikasi', compact('kepribadians'));
    }

    public function create(Request $request){

        $this->validate($request, [
            'kode' => 'required|string|max:155',
            'name' => 'required',
            'kategori' => 'required'
        ]);
        

        $kepribadian = Kepribadian::create([
            'kode' => $request->kode,
            'name' => $request->name,
            'kategori' => $request->kategori,
        ]);

        if ($kepribadian) {
            return redirect()
                ->intended('/kelolaKepribadian')
                ->with([
                    'success' => 'Sifat kepribadian baru ditambahkan'
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
        $kepribadian = Kepribadian::find($id);
        // dd($kepribadian);
        return view('admin.updateIdentifikasi')->with('kepribadian', $kepribadian);
    }

    public function update(Request $request){
        $kepribadian = Kepribadian::find($request->id);
        // dd($kepribadian);
        $this->validate($request, [
            'kode' => 'required|string|max:155',
            'name' => 'required',
            'kategori' => 'required'
        ]);

        dd($request->all());
        $kepribadian->update($request->all());

        if ($kepribadian) {
            return redirect()
                ->intended('/kelolaKepribadian')
                ->with([
                    'success' => 'Sifat kepribadian diupdate'
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
        $kepribadian = Kepribadian::find($id);
        $kepribadian->delete();
        if ($kepribadian) {
            return redirect()
            ->intended('/kelolaKepribadian')
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
        return redirect('/kelolaKepribadian')->with('success', 'Data has been deleted!');
    }
}
