<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onderzoek extends Model
{
    protected $guarded = [];
    use HasFactory;
    
    protected $table = 'onderzoeken';

    public function vragen() {
        return $this->hasMany(Vraag::class, 'onderzoek_id');
    }
}
