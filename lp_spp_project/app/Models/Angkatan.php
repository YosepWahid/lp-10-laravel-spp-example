<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }

    public function dana_praktek()
    {
        return $this->hasMany(dana_praktek::class);
    }


    public function dana_pembangunan()
    {
        return $this->hasMany(dana_praktek::class);
    }
}
