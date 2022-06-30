<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DISC;
use Carbon\Carbon;
use App\Models\History;

class LayananKepribadianController extends Controller
{
    public function index(){

        $discs = DISC::orderBy('jenis_kepribadian', 'ASC')->get();
        $harian = History::where('history_date', Carbon::now()->format('Y-m-d'))->count();
        $bulanan = History::whereDate('created_at','>', Carbon::now()->subMonth())->count();
        $all = History::all()->count();

        return view('admin.layananKepribadian', compact('discs'))
                                    ->with('harian', $harian)
                                    ->with('bulanan', $bulanan)
                                    ->with('all', $all);
    }

    public function indexCreate(){
        $discs = DISC::orderBy('jenis_kepribadian', 'ASC')->get();
        $harian = History::where('history_date', Carbon::now()->format('Y-m-d'))->count();
        $bulanan = History::whereDate('created_at','>', Carbon::now()->subMonth())->count();
        $all = History::all()->count();

        return view('admin.createLayananKepribadian', compact('discs'))
                                    ->with('harian', $harian)
                                    ->with('bulanan', $bulanan)
                                    ->with('all', $all);
    }

    public function create(Request $request){

        $this->validate($request, [
            'jenis_kepribadian' => 'required|string|max:155',
            'keterangan' => 'required'
        ]);
        

        $disc = DISC::create([
            'jenis_kepribadian' => $request->jenis_kepribadian,
            'keterangan' => $request->keterangan,
        ]);

        if ($disc) {
            return redirect()
                ->intended('/layananKepribadian')
                ->with([
                    'success' => 'Data kepribadian baru ditambahkan'
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
        $disc = DISC::find($id);
        
        $harian = History::where('history_date', Carbon::now()->format('Y-m-d'))->count();
        $bulanan = History::whereDate('created_at','>', Carbon::now()->subMonth())->count();
        $all = History::all()->count();
        // dd($kepribadian);
        return view('admin.updateLayananKepribadian')
                                ->with('disc', $disc)
                                ->with('harian', $harian)
                                ->with('bulanan', $bulanan)
                                ->with('all', $all);
    }

    public function update(Request $request){
        $disc = DISC::find($request->id);
        // dd($disc);
        $this->validate($request, [
            'jenis_kepribadian' => 'required|string|max:155',
            'keterangan' => 'required'
        ]);

        $disc->update($request->all());

        if ($disc) {
            return redirect()
                ->intended('/layananKepribadian')
                ->with([
                    'success' => 'Data kepribadian diupdate'
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
        $disc = DISC::find($id);
        $disc->delete();
        if ($disc) {
            return redirect()
            ->intended('/layananKepribadian')
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
        return redirect('/layananKepribadian')->with('success', 'Data has been deleted!');
    }
}
