<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        // $pengobatans = Pengobatan::orderBy('kategori', 'ASC')->get();

        return view('admin.dashboard');
    }
}
