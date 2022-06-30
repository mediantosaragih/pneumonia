<?php

namespace App\Http\Controllers\Pengunjung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Komentar;
use App\Models\Balasan;
use Illuminate\Support\Facades\DB;

class FaqimileController extends Controller
{
    public function index(){
        // $komentars = Komentar::where('user_id', Auth::user()->id)->get();
        $komentars = DB::table('komentars')
                ->select('komentars.komentar', 'balasans.balasan')
                ->rightjoin('balasans','balasans.komentar_id','=','komentars.id')
                ->where(['komentars.user_id' => Auth::user()->id])
                ->get();
                
        $user = User::find(Auth::user()->id);
        return view('pengunjung.faqimile ',compact('komentars','user'));
    }

    public function create(Request $request){

        $this->validate($request, [
            'komentar' => 'required'
        ]);
        

        $komentar = Komentar::create([
            'user_id' => Auth::user()->id,
            'komentar' => $request->komentar
        ]);

        $balasan = Balasan::create([
            'komentar_id' => $komentar->id
        ]);

        if ($komentar) {
            return redirect()
                ->intended('/faqimile')
                ->with([
                    'success' => 'Komentar baru ditambahkan'
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
