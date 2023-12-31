<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Normalisasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function matrik()
    {
        return $this->belongsTo(Matriks::class);
    }

    // public function hasil()
    // {
    //     return $this->belongsTo(Hasil::class);
    // }

}
