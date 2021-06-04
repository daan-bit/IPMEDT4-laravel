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
    
    //toegevoegd door alex, dit wordt straks in een div gezet bij vragen aanmaken en andere functionaliteiten
    public function show($id) {
        $onderzoeken = Onderzoek::find($id);
        return response()->json($onderzoeken);
    }

    public function showQuestion($id) {
        $vragen = Onderzoek::find($id)->vragen;
        return response()->json($vragen);
    }
    }

