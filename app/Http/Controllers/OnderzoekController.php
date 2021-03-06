<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Onderzoek;

class onderzoekController extends Controller
{
    public function store(Request $request){

            $onderzoek  = new Onderzoek();
            $onderzoek->naam = $request->naam;
            $onderzoek->code = $request->code;

            $gesaved = $onderzoek->save(); 
            if($gesaved) {
            return response()->json(['message' => 'Onderzoek succesvol toegevoegd!'], 200);
            } else {
                return response()->json(['message' => 'Onderzoek kon niet toegevoegd worden. Probeer opnieuw!', 401]);  
            }

            Onderzoek::create($request->all());
            return 'Onderzoek in database aangemaakt';
        }
        
    public function update(Request $request){
        $onderzoek = Onderzoek::find($request->input('id'));
        $onderzoek->deleted = 1;

        $onderzoek->save();
        return response()->json("Succesvol verwijderd");
    }

    public function index(){
        $onderzoeken = Onderzoek::where('deleted','=',0)->get();
        return $onderzoeken;
    }

    //toegevoegd door alex, dit wordt straks in een div gezet bij vragen aanmaken en andere functionaliteiten
    public function show($id) {
        $onderzoeken = Onderzoek::find($id);
        return response()->json($onderzoeken);
    }

 
    //aanvraag tot opvragen van een onderzoek met de bepaalde code
    public function show_gebruiker($code){    
        $onderzoek = Onderzoek::where('code','=',$code)->first();
        if($onderzoek) {
            return response()->json($onderzoek,200);
        } else {
            return response()->json(['errors' => 'Onderzoek met deze code bestaat niet. Probeer nog eens!'], 401);
        }
    }        

    
    public function showQuestion($id) {
        $vragen = Onderzoek::find($id)->vragen; //in model statement: where(deleted = 0)

        return response()->json($vragen,200);
    }

    
}

