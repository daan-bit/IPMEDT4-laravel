<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class onderzoekController extends Controller
{
    public function store(Request $request, \App\Models\Onderzoek $onderzoek){

        return $request->input();

        // $onderzoek->naam = $request->input();

        // try{
        //     $onderzoek->save();
        //     return 'Hallo';
        // }catch(Exception $e){
        //     return 'nee';
        // }
    }
}
