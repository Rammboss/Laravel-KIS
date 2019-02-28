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
                            {{ __('Körperliche Untersuchung') }}
                        </div>

                        <!-- card-content -->
                        <div class="card-body">
                            <div id="form-container">
                                <div class="form-group">
                                    <label for="comment" id="anamnesis-forms">{{ __('Körperliche Untersuchung') }}</label>
                                    <textarea class="form-control" rows="4" id="comment"></textarea>
                                </div>
                                <div class="form-group" id="diagnosis-forms">
                                    <label for="diagnosis">{{ __('Verdachtsdiagnose') }}</label>
                                    <input type="text" class="form-control" id="diagnosis">
                                </div>
                            </div>
                            <a href="{{ url('/patient') }}" id="moki-button" style="float:right" class="btn btn-success">{{ __('Körperliche Untersuchung speichern') }}</a>
                        </div>

                        <div class="card-footer text-muted" id="header-footer-color">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection