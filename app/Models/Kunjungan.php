<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;


    protected $table = 'kunjungan';

    protected $fillable = ['tamu_id', 'tanggal','jenis_kunjungan', 'waktu_masuk', 'waktu_keluar', 'keterangan_kunjungan'];

    public function tamu(){
        return $this->belongsTo(Tamu::class);
    }

    public function kesansaran(){
        return $this->hasMany(Kesansaran::class);
    }
}
