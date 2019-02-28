<?php

namespace App\Http\Controllers;

use App\Anamnesis;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AnamnesisController extends Controller
{
    public static function getDrName(Patient $patient){
        return \Illuminate\Support\Facades\DB::table('general__practitioners') ->where('id', intval($patient->general_practitioner_id))->first()->general_practitioner_name;
    }
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $anamnesis = null;
        foreach (Anamnesis::all() as $p){
            if ($p->id === intval($request->input('patient_id'))){
                $anamnesis = $p;
            }
        }

        if ($anamnesis !== null){
            $this->update($request, $anamnesis);
        }else{
            $anamnesis = new Anamnesis([
                'patient_id' => intval($request->input('patient_id')),
                'recent_anamnesis' => $request->input('recent_anamnesis'),
                'previous_anamnesis' => $request->input('previous_anamnesis'),
                'vegetative_anamnesis' => $request->input('vegetative_anamnesis'),
                'risk_anamnesis' => $request->input('risk_anamnesis'),
                'drug_anamnesis' => $request->input('drug_anamnesis'),
                'gender_based_anamnesis' => $request->input('gender_based_anamnesis'),
                'family_anamnesis' => $request->input('family_anamnesis'),
                'social_anamnesis' => $request->input('social_anamnesis'),
                'further_anamnesis' => $request->input('further_anamnesis'),
                'suspected_diagnosis' => $request->input('suspected_diagnosis'),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]);
            $anamnesis->save();
        }




        return redirect('/home')->with('success', 'Patient has benn added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient $patient
     * @param Anamnesis $anamnesis
     * @return \Illuminate\Http\Response
     */
    public function show( Patient $patient, Anamnesis $anamnesis)
    {
        return view('pages.frontend.anamnese', compact( 'patient', 'anamnesis'));
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
    public function update(Request $request, Anamnesis $anamnesis)
    {
      $anamnesis->recent_anamnesis = $request->input('recent_anamnesis');
      $anamnesis->previous_anamnesis = $request->input('previous_anamnesis');
      $anamnesis->vegetative_anamnesis = $request->input('vegetative_anamnesis');
      $anamnesis->risk_anamnesis = $request->input('risk_anamnesis');
      $anamnesis->drug_anamnesis = $request->input('drug_anamnesis');
      $anamnesis->gender_based_anamnesis = $request->input('gender_based_anamnesis');
      $anamnesis->family_anamnesis = $request->input('family_anamnesis');
      $anamnesis->social_anamnesis = $request->input('social_anamnesis');
      $anamnesis->further_anamnesis = $request->input('further_anamnesis');
      $anamnesis->suspected_diagnosis = $request->input('suspected_diagnosis');
      $anamnesis->updated_at = Carbon::now()->toDateTimeString();

      $anamnesis->save();
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
