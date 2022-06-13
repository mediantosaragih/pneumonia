<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    public function index(){

        $historys = History::get();

        return view('admin.history', compact('historys'));
    }
}
