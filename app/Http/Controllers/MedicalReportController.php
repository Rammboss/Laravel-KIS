<?php

namespace App\Http\Controllers;

use App\Anamnesis;
use App\Patient;
use Illuminate\Http\Request;

class MedicalReportController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Patient $patient
     * @param Anamnesis $anamnesis
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient, Anamnesis $anamnesis)
    {
        return view('pages.frontend.medical-report', compact( 'patient', 'anamnesis'));
    }
}
