<?php

namespace App\Http\Controllers\Pengunjung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identifikasi;
use App\Models\HasilIdentifikasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Karir;
use App\Models\Pengunjung;

class IdentifikasiController extends Controller
{
    public function index(){
        $identifikasis = Identifikasi::orderBy('id', 'ASC')->get();
        $user = User::find(Auth::user()->id);
       
        return view('pengunjung.identifikasi', compact('identifikasis','user'));
    }

    public function check(Request $request){
        $pengunjung  =  Pengunjung::where('user_id',Auth::user()->id)->first();
        $identifikasis = Identifikasi::orderBy('id', 'ASC')->get();
        $count = Identifikasi::orderBy('id', 'ASC')->count();
        // $dominance = DB::table('identifikasis')->select('dominance')->get();
        // $dominance = $dominance->toArray();

        // $influence = DB::table('identifikasis')->select('influence')->get();
        // $influence = $influence->toArray();

        // $steadiness = DB::table('identifikasis')->select('steadiness')->get();
        // $steadiness = $steadiness->toArray();

        // $compliance = DB::table('identifikasis')->select('compliance')->get();
        // $compliance = $compliance->toArray();
        // dd($pengunjung);
        $identifikasi_get_req = [];
        $identifikasis = DB::table('identifikasis')->select('*')->get();
        foreach($identifikasis as $item){
            $kode_fix = $item->id;
            $kode_kepribadian = new \stdClass;
            $kode_kepribadian = $request->$kode_fix;
            array_push($identifikasi_get_req, $kode_kepribadian);
        }
        
        $sumDominance = 0;
        $sumInfluence = 0;
        $sumSteadiness = 0;
        $sumCompliance = 0;
        // foreach($dominance as $item){
        //     foreach ($identifikasi_get_req as $secondItem){
        //         if($item->dominance == $secondItem){
        //             $sumDominance +=1;
        //         }
        //     }
        // }

        foreach($identifikasi_get_req as $item){
            foreach($identifikasis as $secondItem){
                if($item == $secondItem->dominance){
                    $sumDominance +=1;
                }
                elseif($item == $secondItem->influence){
                    $sumInfluence +=1;
                }
                elseif($item == $secondItem->steadiness){
                    $sumSteadiness +=1;
                }
                elseif($item == $secondItem->compliance){
                    $sumCompliance +=1;
                }
            }
        }
        $hasil ='';
        $karir;
        if($sumDominance >= $sumInfluence && $sumDominance >= $sumSteadiness && $sumDominance >= $sumCompliance){
            $hasil = "Dominance";
            $karir = Karir::where('kategori','Dominance')->get();
        }elseif($sumInfluence >= $sumDominance && $sumInfluence >= $sumSteadiness && $sumInfluence >= $sumCompliance){
            $hasil = "Influence";
            $karir = Karir::where('kategori','Influence')->get();
        }elseif($sumSteadiness >= $sumDominance && $sumSteadiness >= $sumInfluence && $sumSteadiness >= $sumCompliance){
            $hasil = "Steadiness";
            $karir = Karir::where('kategori','Steadiness')->get();
        }elseif($sumCompliance >= $sumDominance && $sumCompliance >= $sumInfluence && $sumCompliance >= $sumSteadiness){
            $hasil = "Compliance";
            $karir = Karir::where('kategori','Compliance')->get();
        }
        $karir = $karir->toArray();

        $history = HasilIdentifikasi::create([
            'pengunjung_id' => $pengunjung->id,
            'identifikasi_id' => $identifikasi_get_req,
            'karir' => $karir,
            'tanggal' => Carbon::now()->format('Y-m-d'),
            'hasil' => $hasil
        ]);
        
        return redirect()->route('hasilIdentifikasi',[
            'history' => $history,
            'identifikasi_get_req' => $identifikasi_get_req,
            'sumDominance'=>$sumDominance,
            'sumInfluence'=>$sumInfluence,
            'sumSteadiness'=>$sumSteadiness,
            'sumCompliance' =>$sumCompliance,
            'count' =>$count,
            'karir' =>$karir
        ]);
    }

    public function hasil(Request $request){
        $user = User::find(Auth::user()->id);
        $history = HasilIdentifikasi::find($request->history);
        // dd($request->karir);
        return view('pengunjung.hasilIdentifikasi', compact('user'),[
            'history' => $history,
            'identifikasi_get_req' => $request->identifikasi_get_req,
            'sumDominance'=>$request->sumDominance,
            'sumInfluence'=>$request->sumInfluence,
            'sumSteadiness'=>$request->sumSteadiness,
            'sumCompliance' =>$request->sumCompliance,
            'count' =>$request->count,
            'karir' =>$request->karir
        ]);
    }
}
