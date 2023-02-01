<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dortmund extends Model
{
    use HasFactory;
     protected $table = 'orteat';
     protected $fillable = ['ort'];
}
