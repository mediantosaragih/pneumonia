<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Komentar;

class KomentarController extends Controller
{
    public function index(){

        $komentars = Komentar::groupBy('user_id')->get();
        // dd($komentars);
        return view('admin.layananPertanyaan', compact('komentars'));
    }

    public function balas($id){
        $komentars = Komentar::find($id);
        return view('admin.balasPertanyaan', compact('komentars'));
    }
}
