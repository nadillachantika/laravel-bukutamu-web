<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landingpage extends Model
{
    use HasFactory;

    protected $table = 'landingpage_content';

    protected $fillable = ['title', 'description', 'image'];

}
