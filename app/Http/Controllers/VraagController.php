<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Vraag;
 
class VraagController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['show', 'showAntwoorden']]);
    }

    public function store(Request $request){
        $vraag  = new Vraag();
        $vraag->onderzoek_id = $request->onderzoek_id;
        $vraag->cat_naam = $request->cat_naam;
        $vraag->vraag = $request->vraag;
        $vraag->type_vraag = $request->type_vraag;

        $gesaved = $vraag->save(); 
        if($gesaved) {
        return response()->json(['message' => 'Vraag succesvol toegevoegd!'], 200);
        } else {
            return response()->json(['message' => 'Vraag kon niet toegevoegd worden. Probeer opnieuw!', 401]);  
        }
    }

    // public function show($id) {
    //     $vragen = Vraag::find($id);
    //     dd($vragen);
    //     return response()->json($vragen);
    // }   

    public function index($onderzoek_id){
        $vraag1 = Vraag::find($onderzoek_id)->All();
        return ($vraag1);
        // return response()->json($vraag,200);
    }

    public function update(Request $request){
        $vraag = Vraag::find($request->input('id', 'onderzoek_id'));
        $vraag->deleted = 1;

        $vraag->save();
        return response()->json("Succesvol verwijderd");
    }

    public function show($id) {
        $vragen = Vraag::find($id);
        return response()->json($vragen);
    }
    
    public function showAntwoorden($id) {
        $antwoorden = Vraag::find($id)->antwoorden;
        return response()->json($antwoorden);
    }

    
}


