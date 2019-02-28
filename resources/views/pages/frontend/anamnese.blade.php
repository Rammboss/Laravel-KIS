@extends('layouts.sidebar')

@section('content')
    <div id="content">
        <div class="container" id="patient-container">
            @include('includes.patient-header')
            <div class="row">
                <div class="col-lg-12 mb-2">

                    <!-- card -->
                    <div class="card">
                        <div class="card-header" id="header-footer-color">
                            {{ __('Anamnese') }}
                        </div>
                        <form action="{{route('anamnesis.store', 'patient')}}" method="post">
                            @csrf

                            <!-- card-content -->
                            <div class="card-body">
                                <div id="form-container">
                                    <div class="form-group">
                                        <label for="recent_anamnesis" >{{ __('Aktuelle Anamnese') }}</label>
                                        <textarea class="form-control" rows="4" id="recent_anamnesis" name="recent_anamnesis">{{$anamnesis->recent_anamnesis}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="previous_anamnesis">{{ __('Frühere Anamnese') }}</label>
                                        <textarea class="form-control" rows="4" id="previous_anamnesis" name="previous_anamnesis">{{$anamnesis->previous_anamnesis}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="vegetative_anamnesis">{{ __('Vegetative Anamnese') }}</label>
                                        <textarea class="form-control" rows="4" id="vegetative_anamnesis" name="vegetative_anamnesis">{{$anamnesis->vegetative_anamnesis}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="risk_anamnesis">{{ __('Risikoanamnese') }}</label>
                                        <textarea class="form-control" rows="4" id="risk_anamnesis" name="risk_anamnesis">{{$anamnesis->risk_anamnesis}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="drug_anamnesis">{{ __('Medikamenten- und
                                            Suchtmittelanamnese') }}</label>
                                        <textarea class="form-control" rows="4" id="drug_anamnesis" name="drug_anamnesis">{{$anamnesis->drug_anamnesis}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="gender_based_anamnesis">{{ __('Geschlechterspezifische
                                            Anamnese') }}</label>
                                        <textarea class="form-control" rows="4" id="gender_based_anamnesis" name="gender_based_anamnesis">{{$anamnesis->gender_based_anamnesis}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="family_anamnesis">{{ __('Familienanamnese') }}</label>
                                        <textarea class="form-control" rows="4" id="family_anamnesis" name="family_anamnesis">{{$anamnesis->family_anamnesis}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="social_anamnesis">{{ __('Sozialanamnese') }}</label>
                                        <textarea class="form-control" rows="4" id="social_anamnesis" name="social_anamnesis">{{$anamnesis->social_anamnesis}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="further_anamnesis">{{ __('Sonstige Anamnese') }}</label>
                                        <textarea class="form-control" rows="4" id="further_anamnesis" name="further_anamnesis">{{$anamnesis->further_anamnesis}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="suspected_diagnosis">{{ __('Verdachtsdiagnose') }}</label>
                                        <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value={{$anamnesis->suspected_diagnosis}}>
                                    </div>
                                    <input type="hidden" class="form-control" name="patient_id" value={{$patient->id}}>
                                </div>
                                <input name="submit" type="submit" style="float:right" class="btn btn-success" id="moki-button" value="Anamnese speichern"><br><br>
                            </div>
                        </form>

                        <div class="card-footer text-muted" id="header-footer-color">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection