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
}
