<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pengunjung;
use App\Models\Gejala;

class History extends Model
{
    protected $guarded = ['id'];

    public function pengunjung(){
        return $this->belongsTo(Pengunjung::class);
    }

    public function gejala(){
        return $this->belongsTo(Gejala::class);
    }
}
