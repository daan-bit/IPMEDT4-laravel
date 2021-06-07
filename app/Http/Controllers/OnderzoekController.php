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
    public function show($code){    
        $onderzoek = Onderzoek::where('code','=',$code)->first();
        //dd($onderzoek);
        //return response()->json($onderzoek,200);
        return $onderzoek;

    }        
}


