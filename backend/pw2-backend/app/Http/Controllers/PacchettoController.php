<?php

namespace App\Http\Controllers;

use App\Models\Pacchetto;
use Illuminate\Http\Request;

class PacchettoController extends Controller
{
    public function read(Request $request, $id) {
        //GET http://localhost:8000/api/pacchetti/3
        //$id=3

        //Operazione di SELECT su DB
        $pacchetto = Pacchetto::where('id', '=', $id)->with(['agenzia'])->firstOrFail();
        return response()->json($pacchetto);
    }

    public function readAll(Request $request) {
        //Operazione di SELECT su DB
        $pacchetti = Pacchetto::with(['agenzia'])->get();
        return response()->json($pacchetti);
    }
}
