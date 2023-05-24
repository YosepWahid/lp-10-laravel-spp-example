<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function sumbangan()
    {
        return $this->belongsTo(Sumbangan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
