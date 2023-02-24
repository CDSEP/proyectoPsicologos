<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\patient as PatientModel;

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

    public function addPatient(Request $request) {
        $newPatient = PatientModel::create($request->patient);
        if(!$newPatient) {
            return view("error");
        }
        return view("patients.all");
    }

    public function getpatient(Patient $id){


        return view('patient.info').with($id);
    }

    public function editPatient(Request $request, Patient $id){
        $id->update($request->patientData);
        dd($id);
    }

    public function deletePatient(Patient $id){
        $id->delete();
        dd($id);
    }

}
