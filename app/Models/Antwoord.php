<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antwoord extends Model
{
    protected $guarded = [];
    use HasFactory;
    
    protected $table = 'antwoorden';
}
