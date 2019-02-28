@extends('layouts.sidebar')

@section('content')
    <div id="content">
        <div class="container" id="patient-container">
            <div class="row mb-5">
                <div class="border border-dark" id="patient-circle">
                    <img class="center-block" id="patient-qr-code" src="{{ URL::to('/image/BeispielQrCode.png') }}"
                         alt="PatientQrCode">
                </div>
                <div class="col-lg-4">
                    <div class="container" id="patient-header">
                        <h5 class="card-title">{{$patient->first_name . " " . $patient->name}} </h5>
                        <h6 class="card-subtitle mb-2 text-muted">Zimmer {{ $patient->room }}</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="patient-container">
            <div class="row">
                <div class="col-lg-12 mb-2">

                    <!-- card -->
                    <div class="card">
                        <div class="card-header" id="header-footer-color">
                            {{ __('Arztbrief') }}
                        </div>
                        <form action="{{route('home.test', ['patient', 'anamnesis'])}}" method="get">
                            @csrf

                            <!-- card-content -->
                            <div class="card-body">
                                <div class="container" style="max-width: 100%">
                                    <fieldset disabled>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="first-name">{{ __('Vorname') }}</label>
                                                    <input type="text" class="form-control" id="first-name"
                                                           value={{$patient->first_name}}>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="last-name">{{ __('Nachname') }}</label>
                                                    <input type="text" class="form-control" id="last-name"
                                                           value={{ $patient->name }}>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-1">
                                                <div class="form-group">
                                                    <label for="id">{{ __('Klinik ID') }}</label>
                                                    <input type="text" class="form-control" id="id"
                                                           value={{ $patient->clinic_id }}>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="birthday">{{ __('Geburtsdatum') }}</label>
                                                    <input type="text" class="form-control" id="birthday"
                                                           value={{ date('d.m.Y',strtotime($patient->date_of_birth)) }}>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="sex">{{ __('Geschlecht') }}</label>
                                                    <input type="text" class="form-control" id="sex"
                                                           value="{{ $patient->gender }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="comment">{{ __('Kommentar') }}</label>
                                                    <p class="form-control" id="comment">{{ $patient->comment }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="adress">{{ __('Adresse') }}</label>
                                                    <input type="text" class="form-control" id="adress"
                                                           value={{ $patient->address }}>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="telephone">{{ __('Telefon') }}</label>
                                                    <input type="tel" class="form-control" id="telephone"
                                                           value={{ $patient->phone }}>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="mobil">{{ __('Mobil') }}</label>
                                                    <input type="tel" class="form-control" id="mobil"
                                                           value={{ $patient->mobile }}>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="e-mail">{{ __('E-Mail') }}</label>
                                                    <input type="email" class="form-control" id="e-mail"
                                                           value={{ $patient->mail }}>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="health-insurance">{{ __('Krankenkasse') }}</label>
                                                    <input type="text" class="form-control" id="health-insurance"
                                                           value={{ \Illuminate\Support\Facades\DB::table('health__insurances') ->where('id', intval($patient->health_insurance_id))->first()->health_insurence_name }}>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="health-insurance-number">{{ __('Krankenkassennummer') }}</label>
                                                    <input type="text" class="form-control" id="health-insurance-number"
                                                           value={{ $patient->health_insurance_number }}>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="family-doctor">{{ __('Hausarzt') }}</label>
                                                    <p class="form-control"
                                                       id="family-doctor"> {{ \Illuminate\Support\Facades\DB::table('general__practitioners') ->where('id', intval($patient->general_practitioner_id))->first()->general_practitioner_name  }}</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="family-doctor-adress">{{ __('Adresse') }}</label>
                                                    <p class="form-control"
                                                       id="family-doctor-adress">{{ \Illuminate\Support\Facades\DB::table('general__practitioners') ->where('id', intval($patient->general_practitioner_id))->first()->address  }} </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="family-doctor-telephone">{{ __('Telefon') }}</label>
                                                    <input type="tel" class="form-control" id="family-doctor-telephone"
                                                           value={{ \Illuminate\Support\Facades\DB::table('general__practitioners') ->where('id', intval($patient->general_practitioner_id))->first()->phone  }}>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="family-doctor-mobil">{{ __('Mobil') }}</label>
                                                    <input type="tel" class="form-control" id="family-doctor-mobil"
                                                           value={{ \Illuminate\Support\Facades\DB::table('general__practitioners') ->where('id', intval($patient->general_practitioner_id))->first()->mobile  }}>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="family-doctor-e-mail">{{ __('E-Mail') }}</label>
                                                    <input type="email" class="form-control" id="family-doctor-e-mail"
                                                           value={{ \Illuminate\Support\Facades\DB::table('general__practitioners') ->where('id', intval($patient->general_practitioner_id))->first()->mail  }}>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <br><br><br>

                                    <!-- anamnese-textareas -->
                                    <div id="form-container">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox-inline"
                                                       id="actually" name="recent_anamnesis_checked" checked>
                                                <label class="custom-control-label" for="actually">{{ __('Aktuelle
                                                    Anamnese') }}</label>
                                                <textarea class="form-control" rows="4"
                                                          id="actually"
                                                          name="recent_anamnesis">{{$anamnesis->recent_anamnesis}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox-inline"
                                                       id="earlier" name="previous_anamnesis_checked" checked>
                                                <label class="custom-control-label" for="earlier">{{ __('Frühere
                                                    Anamnese') }}</label>
                                                <textarea class="form-control" rows="4"
                                                          id="earlier"
                                                          name="previous_anamnesis">{{$anamnesis->previous_anamnesis}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox-inline"
                                                       id="vegetative" name="vegetative_anamnesis_checked" checked>
                                                <label class="custom-control-label" for="vegetative">{{ __('Vegetative
                                                    Anamnese') }}</label>
                                                <textarea class="form-control" rows="4"
                                                          id="vegetative"
                                                          name="vegetative_anamnesis">{{$anamnesis->vegetative_anamnesis}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox-inline"
                                                       id="risk" name="risk_anamnesis_checked" checked>
                                                <label class="custom-control-label"
                                                       for="risk">{{ __('Risikoanamnese') }}</label>
                                                <textarea class="form-control" rows="4"
                                                          id="risk"
                                                          name="risk_anamnesis">{{$anamnesis->risk_anamnesis}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox-inline"
                                                       id="drugs" name="drug_anamnesis_checked" checked>
                                                <label class="custom-control-label" for="drugs">{{ __('Medikamenten- und
                                                    Suchtmittelanamnese') }}</label>
                                                <textarea class="form-control" rows="4"
                                                          id="drugs"
                                                          name="drug_anamnesis">{{$anamnesis->drug_anamnesis}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox-inline"
                                                       id="gender-specific" name="gender_anamnesis_checked" checked>
                                                <label class="custom-control-label" for="gender-specific">{{ __('Geschlechterspezifische
                                                    Anamnese') }}</label>
                                                <textarea class="form-control" rows="4"
                                                          id="gender-specific"
                                                          name="gender_based_anamnesis">{{$anamnesis->gender_based_anamnesis}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox-inline"
                                                       id="family" name="family_anamnesis_checked" checked>
                                                <label class="custom-control-label"
                                                       for="family">{{ __('Familienanamnese') }}</label>
                                                <textarea class="form-control" rows="4"
                                                          id="family"
                                                          name="family_anamnesis">{{$anamnesis->family_anamnesis}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox-inline"
                                                       id="social" name="social_anamnesis_checked" checked>
                                                <label class="custom-control-label"
                                                       for="social">{{ __('Sozialanamnese') }}</label>
                                                <textarea class="form-control" rows="4"
                                                          id="social"
                                                          name="social_anamnesis">{{$anamnesis->social_anamnesis}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox-inline"
                                                       id="other" name="further_anamnesis_checked" checked>
                                                <label class="custom-control-label" for="other">{{ __('Sonstige
                                                    Anamnese') }}</label>
                                                <textarea class="form-control" rows="4"
                                                          id="other"
                                                          name="further_anamnesis">{{$anamnesis->further_anamnesis}}</textarea>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox-inline"
                                                       id="physical-examination" name="physical_examination_checked"
                                                       checked>
                                                <label class="custom-control-label" for="physical-examination">{{ __('Körperliche
                                                    Untersuchung') }}</label>
                                                <textarea class="form-control" rows="4"
                                                          id="physical-examination"
                                                          name="physical_examination"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox-inline"
                                                       id="specific-examination" name="specific_examination_checked"
                                                       checked>
                                                <label class="custom-control-label" for="specific-examination">{{ __('Spezielle
                                                    Untersuchung') }}</label>
                                                <textarea class="form-control" rows="4"
                                                          id="specific-examination"
                                                          name="special_examination"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox-inline"
                                                       id="medication-schedule" name="medication_schedule_checked"
                                                       checked>
                                                <label class="custom-control-label"
                                                       for="medication-schedule">{{ __('Medikationsplan') }}</label>
                                            </div>
                                            <div class="row" style="padding-left: 20px">
                                                <div class="col-lg-3">

                                                    <!-- medication-schedule-table -->
                                                    <table class="table table-hover">
                                                        <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>{{ __('Morgens') }}</th>
                                                            <th>{{ __('Mittags') }}</th>
                                                            <th>{{ __('Abends') }}</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>{{ __('Paracetamol') }}</td>
                                                            <td>{{ __('-') }}</td>
                                                            <td>{{ __('-') }}</td>
                                                            <td>{{ __('1') }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{ __('Catapresan') }}</td>
                                                            <td>{{ __('1') }}</td>
                                                            <td>{{ __('-') }}</td>
                                                            <td>{{ __('1') }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{ __('Loratadin') }}</td>
                                                            <td>{{ __('-') }}</td>
                                                            <td>{{ __('-') }}</td>
                                                            <td>{{ __('2') }}</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox-inline"
                                                       id="treatment-protocol" name="treatment_protocol_checked"
                                                       checked>
                                                <label class="custom-control-label"
                                                       for="treatment-protocol">{{ __('Behandlungsprotokoll') }}</label>
                                                <textarea class="form-control" rows="4"
                                                          id="treatment-protocol" name="treatment_protocol"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox-inline"
                                                       id="care-protocol" name="care_protocol_checked" checked>
                                                <label class="custom-control-label"
                                                       for="care-protocol">{{ __('Pflegeprotokoll') }}</label>
                                                <textarea class="form-control" rows="4" id="care-protocol"
                                                          name="care_protocol"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox-inline"
                                                       id="free-text" name="freetext_checked" checked>
                                                <label class="custom-control-label"
                                                       for="free-text">{{ __('Freitext') }}</label>
                                                <textarea class="form-control" rows="4" id="free-text"
                                                          name="freetext"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox-inline"
                                                       id="main-diagnosis" name="main_diagnosis_checked" checked>
                                                <label for="main-diagnosis">{{ __('Hauptdiagnose') }}</label>
                                                <textarea class="form-control" rows="1"
                                                          id="main-diagnosis"
                                                          name="main_diagnosis">{{$anamnesis->suspected_diagnosis}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox-inline"
                                                       id="secondary-diagnosis" name="secondary_diagnosis_checked"
                                                       checked>
                                                <label class="custom-control-label"
                                                       for="secondary-diagnosis">{{ __('Nebendiagnose') }}</label>
                                                <textarea class="form-control" rows="1"
                                                          id="secondary-diagnosis"
                                                          name="secondary_diagnosis"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <input type="hidden" class="form-control" name="patient" value={{$patient->id}}>
                                        <input type="hidden" class="form-control" name="anamnesis"
                                               value={{$anamnesis->id}}>
                                        <input name="submit" type="submit" style="float:right" class="btn btn-success"
                                               id="moki-button"
                                               value="Patient entlassen">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection