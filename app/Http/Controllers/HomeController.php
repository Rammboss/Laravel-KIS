<?php

namespace App\Http\Controllers;

use App\General_Practitioner;
use App\Patient;
use App\Role;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.frontend.home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function generatePDF(Request $request)
    {
        $patient = null;
        foreach (Patient::all() as $p) {
            if ($p->id === intval($request->input('patient'))) {
                $patient = $p;
            }
        }
        $hausarzt = null;
        foreach (General_Practitioner::all() as $p) {
            if ($p->id === intval($patient->general_practitioner_id)) {
                $hausarzt = $p;
            }
        }
        $user = null;
        foreach (User::all() as $p) {
            if ($p->id === Auth::id()) {
                $user = $p;
            }
        }

        $userJob = null;
        foreach (Role::all() as $p) {
            if ($p->id === $user->role_id) {
                $userJob = $p->role_name;
            }
        }

        $data = [
            'user_first_name' => $user->first_name,
            'user_name' => $user->name,
            'username' => $user->username,
            'userJob' => $userJob,

            'patient_first_name' => $patient->first_name,
            'patient_name' => $patient->name,
            'patient_date_of_birth' => date('d.m.Y', strtotime($patient->date_of_birth)),
            'patient_address' => $patient->address,
            'patient_aufnahme' => date('d.m.Y', strtotime($patient->created_at)),
            'patient_entlassungsdatum' => date('d.m.Y', strtotime(Carbon::now())),

            'general_practitioner_name' => $hausarzt->general_practitioner_name,
            'general_practitioner_address' => $hausarzt->address

        ];

        //set ReleseDate of Patient
        DB::table('patients')->where('id',$patient->id)->update(array(
            'release_date'=> Carbon::now(),
        ));


        //field-selection for PDF generation
        //anamnesis start
        if ($request->has('recent_anamnesis_checked')) {
            $data['recent_anamnesis'] = $request->input('recent_anamnesis');
        } else {
            $data['recent_anamnesis'] = false;
        }

        if ($request->has('previous_anamnesis_checked')) {
            $data['previous_anamnesis'] = $request->input('previous_anamnesis');
        } else {
            $data['previous_anamnesis'] = false;
        }

        if ($request->has('vegetative_anamnesis_checked')) {
            $data['vegetative_anamnesis'] = $request->input('vegetative_anamnesis');
        } else {
            $data['vegetative_anamnesis'] = false;
        }

        if ($request->has('risk_anamnesis_checked')) {
            $data['risk_anamnesis'] = $request->input('risk_anamnesis');
        } else {
            $data['risk_anamnesis'] = false;
        }

        if ($request->has('drug_anamnesis_checked')) {
            $data['drug_anamnesis'] = $request->input('drug_anamnesis');
        } else {
            $data['drug_anamnesis'] = false;
        }

        if ($request->has('gender_anamnesis_checked')) {
            $data['gender_based_anamnesis'] = $request->input('gender_based_anamnesis');

        } else {
            $data['gender_based_anamnesis'] = false;
        }

        if ($request->has('family_anamnesis_checked')) {
            $data['family_anamnesis'] = $request->input('family_anamnesis');

        } else {
            $data['family_anamnesis'] = false;
        }

        if ($request->has('social_anamnesis_checked')) {
            $data['social_anamnesis'] = $request->input('social_anamnesis');
        } else {
            $data['social_anamnesis'] = false;
        }

        if ($request->has('further_anamnesis_checked')) {
            $data['further_anamnesis'] = $request->input('further_anamnesis');

        } else {
            $data['further_anamnesis'] = false;
        }
        //anamnesis end

        if ($request->has('physical_examination_checked')) {
            $data['physical_examination'] = $request->input('physical_examination');
        } else {
            $data['physical_examination'] = false;
        }

        if ($request->has('specific_examination_checked')) {
            $data['special_examination'] = $request->input('special_examination');
        } else {
            $data['special_examination'] = false;
        }

        if ($request->has('medication_schedule_checked')) {
            $data['medication_schedule'] = 'NOT IMPLEMENTET YET'; // TODO: Medikationplan
        } else {
            $data['medication_schedule'] = false;
        }

        if ($request->has('treatment_protocol_checked')) {
            $data['treatment_protocol'] = $request->input('treatment_protocol');
        } else {
            $data['treatment_protocol'] = false;
        }

        if ($request->has('care_protocol_checked')) {
            $data['care_protocol'] = $request->input('care_protocol');
        } else {
            $data['care_protocol'] = false;
        }

        if ($request->has('freetext_checked')) {
            $data['freetext'] = $request->input('freetext');

        } else {
            $data['freetext'] = false;
        }

        if ($request->has('main_diagnosis_checked'))
            $data['main_diagnosis'] = $request->input('main_diagnosis');

        if ($request->has('secondary_diagnosis_checked')) {
            $data['secondary_diagnosis'] = $request->input('secondary_diagnosis');
        } else {
            $data['secondary_diagnosis'] = false;
        }


        $pdf = PDF::loadView('widgets.pdf', $data);


        return $pdf->download('Arztbrief von ' . $patient->first_name . ' ' . $patient->name .'.pdf');

    }
}
