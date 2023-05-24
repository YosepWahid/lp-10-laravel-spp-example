<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dana_pembangunan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];



    public function angkatan()
    {
        return $this->belongsTo(Angkatan::class);
    }
}
