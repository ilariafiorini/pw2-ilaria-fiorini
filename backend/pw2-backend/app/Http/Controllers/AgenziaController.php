<?php

namespace App\Http\Controllers;

use App\Models\Agenzia;
use Illuminate\Http\Request;

class AgenziaController extends Controller
{
    public function read(Request $request, $id) {
        //GET http://localhost:8000/api/agenzie/3
        //$id=3

        //Operazione di SELECT su DB
        $agenzia = Agenzia::where('id', '=', $id)->with('pacchetti')->firstOrFail();
        return response()->json($agenzia);
    }

    public function readAll(Request $request) {
        //Operazione di SELECT su DB
        $agenzie = Agenzia::with('pacchetti')->get();
        return response()->json($agenzie);
    }
    public function listAll(Request $request) {
        //Operazione di SELECT su DB
        $agenzie = Agenzia::get();
        return response()->json($agenzie);
    }
}
