<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Vraag extends Model 
{
    protected $guarded = [];
    protected $fillable = ['vraag', 'onderzoek_id','cat_naam'];
    use HasFactory;
    public $timestamps = false;
    protected $table = 'vragen';

    
}
