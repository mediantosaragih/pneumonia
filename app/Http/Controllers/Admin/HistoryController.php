<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    public function index(){

        $historys = History::orderby('created_at','DESC')->get();

        // $historys->kepribadian_id = json_decode($historys->kepribadian_id);
        // dd($historys->kepribadian_id);
        return view('admin.history', compact('historys'));
    }
}
