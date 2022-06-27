<?php

namespace App\Http\Controllers\Pengunjung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardPengunjungController extends Controller
{
    public function index(){
        return view('pengunjung.dashboard_pengunjung');
    }
}
