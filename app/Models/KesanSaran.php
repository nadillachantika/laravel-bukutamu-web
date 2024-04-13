<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KesanSaran extends Model
{
    use HasFactory;


    protected $fillable = ['tamu_id', 'kesan', 'saran'];

    public function tamu(){
        return $this->belongsTo(Tamu::class);
    }
}
