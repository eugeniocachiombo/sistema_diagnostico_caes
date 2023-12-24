<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnostic;

class DiagnosticController extends Controller
{
    function Index() {
        return view('diagnostic/diagnostic');
    }

    function Check(Request $request){
        $symptom1 = $request->input("symptom1");
        $symptom2 = $request->input("symptom2");
        $symptom3 = $request->input("symptom3");
        $message = true;
        return view('diagnostic/diagnostic', compact("message"));
    }
}
