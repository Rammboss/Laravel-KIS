@extends('layouts.sidebar')

@section('content')
    <div id="content">
        <div class="container" id="patient-container">
            @include('includes.patient-header')
            <div class="row">
                <div class="col-lg-12 mb-2">

                    <!-- anamnese-panel -->
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="card-header" id="header-footer-color">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse-anamnesis">{{ __('Anamnese') }}</a>
                                </h4>
                            </div>

                            <!-- anamnese-collapse -->
                            <div id="collapse-anamnesis" class="panel-collapse collapse">
                                @if(DB::table('anamnesis_questionaire')->where('patient_id', $patient->id)->first() !== null)
                                    <div class="panel-body"><h2 class="card-title">{{ __('Aktuelle Anamnese') }}</h2>
                                        <p class="card-text">{{ DB::table('anamnesis_questionaire')->where('patient_id', $patient->id)->first()->recent_anamnesis}}</p>
                                        <br>
                                        @else
                                            <div class="panel-body"><h2 class="card-title">{{ __('Aktuelle Anamnese') }}</h2>
                                                <p class="card-text">{{ __('nicht vorhanden') }}</p><br>
                                                @endif

                                                <a href="{{ url('/patient/' . $patient->id .'/anamnese/'. DB::table('anamnesis_questionaire')->where('patient_id', $patient->id)->value('id') ) }}"
                                                   id="moki-button" class="btn btn-success">{{ __('Anamnese öffnen') }}</a>
                                            </div>
                                            @if(DB::table('anamnesis_questionaire')->where('patient_id', $patient->id)->first() !== null)

                                            <!-- access-control -->
                                                <div class="panel-footer text-muted" id="header-footer-color">
                                                    {{ __('Zuletzt geändert
                                                    von') }} {{ \App\User::find($anamnesis->audits()->latest()->first()['user_id'])->first_name . " " . \App\User::find($anamnesis->audits()->latest()->first()['user_id'])->name }}
                                                    {{ __('am') }} {{ $anamnesis->audits()->latest()->first()->updated_at->toFormattedDateString()}}
                                                </div>
                                            @endif
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-2">

                        <!-- physical-examination-panel -->
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="card-header" id="header-footer-color">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse-examination">{{ __('Körperliche Untersuchung') }}</a>
                                    </h4>
                                </div>

                                <!-- physical-examination-collapse -->
                                <div id="collapse-examination" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <h2 class="card-title">{{ __('Diagnose') }}</h2>
                                        <p class="card-text">{{ __('Morbus Parkinson') }}</p><br>
                                        <a href="{{ url('/patient/' . $patient->id .'/untersuchung') }}"
                                           id="moki-button"
                                           class="btn btn-success">{{ __('Körperliche Untersuchung öffnen') }}</a>
                                    </div>

                                    <!-- access-control -->
                                    <div class="panel-footer text-muted" id="header-footer-color">
                                        {{ __('Zuletzt geändert') }}
                                        {{ __('von') }} {{ \App\User::find($patient->audits()->latest()->first()['user_id'])->first_name . " " . \App\User::find($patient->audits()->latest()->first()['user_id'])->name }}
                                        {{ __('am') }} {{ $patient->audits()->latest()->first()->updated_at->toFormattedDateString()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection