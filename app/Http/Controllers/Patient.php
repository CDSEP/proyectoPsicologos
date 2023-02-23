<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Patient extends Controller
{
    // public function addPatient(Request $request){
        
        // $patient = new Patient();
        // $patient->name = $request->name;
        // $patient->age = $request->age;
        // $patient->user_id = $request->user_id;
        // $patient->save();

    //     return redirect()->back();
    // }

    public function getpatient($id){
        $patient = Patient::find($id);
        
        return view('patient.info');
    }
}
