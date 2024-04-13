<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;

    protected $table = 'tamu';

    protected $fillable = ['nama', 'alamat', 'nohp', 'jabatan', 'instansi', 'keterangan'];

    public function kunjungan(){
        return $this->hasMany(Kunjungan::class);
    }

    public function kesansaran(){
        return $this->hasMany(Kesansaran::class);
    }
}
