<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onderzoek extends Model
{
    protected $guarded = [];
    protected $fillable = ['code','name'];
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'onderzoeken';

    public function vragen() {
        return $this->hasMany(Vraag::class, 'onderzoek_id');
    }
}
