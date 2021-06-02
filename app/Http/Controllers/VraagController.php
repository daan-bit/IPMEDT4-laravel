<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vraag;
 
class VraagController extends Controller
{
    public function store(Request $request){
        $vraag  = new Vraag();


        $gesaved = $vraag->save(); {
        if($gesaved) {
        return response()->json(['message' => 'Vraag succesvol toegevoegd!']);
        } else {
            return response()->json(['message' => 'Vraag kon niet toegevoegd worden. Probeer opnieuw!', 401]);  
        }
    }
}
