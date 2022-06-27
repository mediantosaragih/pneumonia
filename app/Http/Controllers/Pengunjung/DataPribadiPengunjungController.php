<?php

namespace App\Http\Controllers\Pengunjung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataPribadiPengunjungController extends Controller
{
    public function index(){
        return view('pengunjung.datapribadi ');
    }
}
