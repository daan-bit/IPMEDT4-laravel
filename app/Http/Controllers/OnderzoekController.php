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
        
    public function index(){
        return Onderzoek::all();
        }

    //toegevoegd door alex, dit wordt straks in een div gezet bij vragen aanmaken en andere functionaliteiten
    public function show($id) {
        $onderzoeken = Onderzoek::find($id);
        return response()->json($onderzoeken);
    }
 
    //aanvraag tot opvragen van een onderzoek met de bepaalde code
    public function show_gebruiker($code){    
        $onderzoek = Onderzoek::where('code','=',$code)->first();
        return response()->json($onderzoek,200);
    }        
}
    
    


    