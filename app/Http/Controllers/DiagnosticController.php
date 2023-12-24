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
        //$result = DB::select('select * from users where active = ?', [1]);
        $message = true;
        return view('diagnostic/diagnostic', compact("symptoms", "message"));
    }
}
