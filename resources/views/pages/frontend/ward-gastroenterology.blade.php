@extends('layouts.sidebar')

@section('content')
    <div id="content">
        <div class="col-lg-12">
            <h1 class="page-header">{{ __('Gastroenterologie') }}</h1>
            <div class="row">

                @foreach (\App\Patient::all() as $patient)
                    @if($patient->ward_id == 5&& $patient->release_date == null)
                        <div class="card mt-3 ml-2" style="width: 18rem;" id="patient-card">
                            <div class="card-img-top" id="patient-card-header">
                                <div class="center-block" id="patient-card-circle">
                                    <img class="center-block" id="patient-card-qr-code"
                                         src="{{ URL::to('/image/BeispielQrCode.png') }}" alt="PatientQrCode">
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$patient->first_name ." " . $patient->name}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{"Zimmer " . $patient->room}}</h6>
                                @if(DB::table('anamnesis_questionaire')->where('patient_id', $patient->id)->first() !== null)

                                    <p class="card-text">{{ DB::table('anamnesis_questionaire')->where('patient_id', $patient->id)->first()->suspected_diagnosis}}
                                        <br><br><br></p>
                                @else
                                    <p class="card-text">Keine Erkrankung vorhanden<br><br><br></p>
                                @endif
                                <a href="{{ url('/patient/' . $patient->id) }}" class="card-link"
                                   id="patient-link">{{ __('Patientenkarte') }}</a>
                                @if(DB::table('anamnesis_questionaire')->where('patient_id', $patient->id)->first() !== null )
                                    <a href="{{ url('/patient/' . $patient->id . "/" . DB::table('anamnesis_questionaire')->where('patient_id', $patient->id)->value('id') . '/arztbrief') }}"
                                       class="card-link" id="medical-report-link">{{ __('Entlassung') }}</a>
                                @endif
                            </div>

                            <!-- access-control -->
                            <div class="card-footer text-muted">
                                {{ __('Zuletzt geändert von ') }}
                                <b>{{ \App\User::find($patient->audits()->latest()->first()['user_id'])->first_name . " " . \App\User::find($patient->audits()->latest()->first()['user_id'])->name }}</b> {{ __('am') }} {{ $patient->audits()->latest()->first()->updated_at->toFormattedDateString()}}
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
