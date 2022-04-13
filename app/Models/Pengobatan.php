<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gejala;

class Pengobatan extends Model
{
    protected $guarded = ['id'];
    
    public function gejala(){
        return $this->belongsTo(Gejala::class);
    }
}
