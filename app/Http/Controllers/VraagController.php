<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vraag;
 
class VraagController extends Controller
{
    public function store(Request $request){
        $vraag  = new Vraag();
        $vraag->onderzoek_id = $request->onderzoek_id;
        $vraag->cat_naam = $request->cat_naam;
        $vraag->vraag = $request->vraag;

        $gesaved = $vraag->save(); {
        if($gesaved) {
        return response()->json(['message' => 'Vraag succesvol toegevoegd!'], 200);
        } else {
            return response()->json(['message' => 'Vraag kon niet toegevoegd worden. Probeer opnieuw!', 401]);  
        }
    }
}

    public function show($id) {
        $vragen = Vragen::find($id);
        return response()->json($vragen);
    }   
}