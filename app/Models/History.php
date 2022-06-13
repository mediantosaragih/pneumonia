<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kepribadian;

class History extends Model
{
    protected $guarded = ['id'];

    public function pengunjung(){
        return $this->belongsTo(Pengunjung::class);
    }

    public function kepribadian(){
        return $this->belongsTo(Kepribadian::class);
    }
}
