<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnostic;

class DiagnosticController extends Controller
{
    function index() {
        return view('diagnostic/diagnostic');
    }

    function check(Request $request){
        $symptomA = $request->input("symptomA");
        $symptomB = $request->input("symptomB");
        $symptomC = $request->input("symptomC");
        $message = true;
        return view('diagnostic/diagnostic', compact("message"));
    }
}
