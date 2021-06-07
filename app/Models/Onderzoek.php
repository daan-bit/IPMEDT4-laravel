<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onderzoek extends Model
{
    protected $guarded = [];
    protected $fillable = ['code','name'];
    use HasFactory;
    
    protected $table = 'onderzoeken';
}
