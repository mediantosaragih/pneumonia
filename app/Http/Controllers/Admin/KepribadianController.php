<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kepribadian;
use Carbon\Carbon;
use App\Models\History;

class KepribadianController extends Controller
{
    public function index(){

        $kepribadians = Kepribadian::orderBy('kategori', 'ASC')->get();
        $harian = History::where('history_date', Carbon::now()->format('Y-m-d'))->count();
        $bulanan = History::whereDate('created_at','>', Carbon::now()->subMonth())->count();
        $all = History::all()->count();

        return view('admin.kelolaIdentifikasi', compact('kepribadians'))
                                    ->with('harian', $harian)
                                    ->with('bulanan', $bulanan)
                                    ->with('all', $all);
                                                
    }

    public function indexCreate(){
        $kepribadians = Kepribadian::orderBy('kategori', 'ASC')->get();
        $harian = History::where('history_date', Carbon::now()->format('Y-m-d'))->count();
        $bulanan = History::whereDate('created_at','>', Carbon::now()->subMonth())->count();
        $all = History::all()->count();

        return view('admin.createIdentifikasi', compact('kepribadians'))
                                    ->with('harian', $harian)
                                    ->with('bulanan', $bulanan)
                                    ->with('all', $all);
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
        $harian = History::where('history_date', Carbon::now()->format('Y-m-d'))->count();
        $bulanan = History::whereDate('created_at','>', Carbon::now()->subMonth())->count();
        $all = History::all()->count();
        // dd($kepribadian);
        return view('admin.updateIdentifikasi')->with('kepribadian', $kepribadian)
                                    ->with('harian', $harian)
                                    ->with('bulanan', $bulanan)
                                    ->with('all', $all);
    }

    public function update(Request $request){
        $kepribadian = Kepribadian::find($request->id);
        // dd($kepribadian);
        $this->validate($request, [
            'kode' => 'required|string|max:155',
            'name' => 'required',
            'kategori' => 'required'
        ]);

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
