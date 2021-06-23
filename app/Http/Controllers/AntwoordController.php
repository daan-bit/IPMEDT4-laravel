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
    //

    public function save(Request $req) {

        $form = $req->all();
        $ans_ids = [];

        foreach($form['list'] as $ans){
            $ans_ids[] = Antwoord::insertGetId($ans);
        }
       
        return response()->json(['list' => $ans_ids, 200 ]);  
    }
}
