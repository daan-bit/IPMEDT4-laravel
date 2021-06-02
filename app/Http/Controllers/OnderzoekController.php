<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Onderzoek;

class onderzoekController extends Controller
{
    public function store(Request $request){
            Onderzoek::create($request->all());
            return 'Onderzoek in database aangemaakt';

        }            
    }

