<?php

namespace App\Http\Controllers\Pengunjung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pengunjung;
use Illuminate\Support\Facades\Auth;

class DashboardPengunjungController extends Controller
{
    public function index(){
        $user = User::find(Auth::user()->id);
        return view('pengunjung.dashboard_pengunjung', compact('user'));
    }

    public function profile($id){
        $user = User::find(Auth::user()->id);
        $pengunjung = Pengunjung::where('user_id',$id)->first();
        // dd($pengunjung->passsword);
        // $user->password = decrypt($user->password);
        // dd($user->password);
        return view('pengunjung.datapribadi', compact('pengunjung','user'));
    }

    public function update(Request $request){
        dd($request->all());
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
}
