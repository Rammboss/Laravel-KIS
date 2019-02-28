<?php

namespace App\Http\Controllers;

use App\Anamnesis;
use App\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $patient = new Patient([
            'first_name' => $request->input('first_name'),
            'name' => $request->input('last_name'),
            'clinic_id' => $request->input('clinic_id'),
            'gender' => $request->input('sex'),
            'date_of_birth' => $request->input('birthday'),
            'comment' => $request->input('comment'),
            'address' => $request->input('address'),
            'phone' => $request->input('telephone'),
            'mobile' => $request->input('mobil'),
            'mail' => $request->input('email'),
            'room' => $request->input('room'),
            'health_insurance_number' => $request->input('health-insurance'),
            'ward_id' => $request->input('ward'),
            'general_practitioner_id' => 1,
            'health_insurance_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        $patient->save();

        return redirect('/home')->with('success', 'Patient has benn added!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient $anamnesis
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        $anamnesis = null;
        foreach (Anamnesis::all() as $p) {
            if ($p->id === $patient->id) {
                $anamnesis = $p;
            }
        }


        return view('pages.frontend.patient', compact('patient', 'anamnesis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
