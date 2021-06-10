<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Vraag extends Model 
{
    protected $guarded = [];
    use HasFactory;
    public $timestamps = false;
    protected $table = 'vragen';

    public function antwoorden() {
        return $this->hasMany(Antwoord::class, 'vraag_id');
    }
    
}
