<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antwoord;

class AntwoordController extends Controller
{
    public function show($id) {
        $antwoord = Antwoord::find($id);
        return response()->json($antwoord, 200);
    }
    
    
    public function store(Request $request){
        $antwoord  = new Antwoord();
        $antwoord->vraag_id = $request->vraag_id;
        $antwoord->antwoord = $request->antwoord;
        $gesaved = $antwoord->save(); 

        if($gesaved) {
        return response()->json(['message' => 'Antwoord succesvol toegevoegd!'], 200);
        } else {
            return response()->json(['message' => 'Antwoord kon niet toegevoegd worden. Probeer opnieuw!', 401]);  
        }
    }

    //
}
