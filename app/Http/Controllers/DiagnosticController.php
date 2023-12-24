<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnostic;
use Illuminate\Support\Facades\DB;

class DiagnosticController extends Controller
{
    function index() {
        $symptoms = DB::select('select * from sintoma');
        return view('diagnostic/diagnostic', compact("symptoms"));
    }

    function check(Request $request){
        $symptoms = DB::select('select * from sintoma');
        $symptomA = $request->input("symptomA");
        $symptomB = $request->input("symptomB");
        $symptomC = $request->input("symptomC");
        $result = DB::select(
            'select * FROM combinacao_sintoma
            left outer join sintoma as sintomaA
            on sintomaA.id_sintoma = combinacao_sintoma.sintomaA
            left outer join sintoma as sintomaB
            on sintomaB.id_sintoma = combinacao_sintoma.sintomaB
            left outer join sintoma as sintomaC
            on sintomaC.id_sintoma = combinacao_sintoma.sintomaC
            left outer join doenca 
            on doenca.id_combinacao_sintoma = combinacao_sintoma.id_combinacao_sintoma
            where sintomaA = ? and sintomaB = ? and sintomaC = ?', 
            [$symptomA,$symptomB,$symptomC]
        );
        $message = $result;
        return view('diagnostic/diagnostic', compact("symptoms", "message"));
    }
}
