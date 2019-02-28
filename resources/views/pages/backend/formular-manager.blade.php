@extends('layouts.administration-area')

@section('content')
    <div id="page-wrapper">
        <div class="col-lg-12">
            <h1 class="page-header">{{ __('Formularmanager') }}</h1>
            <div class="row">

                <!-- anamnese-card-content -->
                <div class="card mt-3 ml-2" style="width: 18rem;" id="patient-card">
                    <div class="card-img-top" id="patient-card-header">
                        <div class="center-block" id="patient-card-circle">
                            <i class="fa fa-stethoscope fa-5x" id="formular-manager-icon-stethoscope"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">{{ __('Anamnese') }}</h2>
                    </div>

                    <div class="card-footer" id="formular-footer">
                        <h5>
                            <div class="row">
                                <a href="{{ url('/dashboard/formular/anamnese') }}" class="card-link" id="patient-link">{{ __('Formular bearbeiten') }}</a>
                            </div>
                            <div class="row">
                                <a href="#" data-toggle="modal" data-target="#delete" id="medical-report-link">{{ __('Formular löschen') }}</a>
                            </div>
                        </h5>
                    </div>
                </div>
                <!-- /.anamnese-card-content -->

                <!-- medical-report-card-content -->
                <div class="card mt-3 ml-2" style="width: 18rem;" id="patient-card">
                    <div class="card-img-top" id="patient-card-header">
                        <div class="center-block" id="patient-card-circle">
                            <i class="fa fa-envelope fa-5x" id="formular-manager-icon"></i>
                        </div>
                    </div>

                    <div class="card-body">
                        <h2 class="card-title">{{ __('Arztbrief') }}</h2>
                    </div>

                    <div class="card-footer" id="formular-footer">
                        <h5>
                            <div class="row">
                                <a href="{{ url('/dashboard/formular/arztbrief') }}" class="card-link" id="patient-link">{{ __('Formular bearbeiten') }}</a>
                            </div>
                            <div class="row">
                                <a href="#" data-toggle="modal" data-target="#delete" id="medical-report-link">{{ __('Formular löschen') }}</a>
                            </div>
                        </h5>
                    </div>
                </div>
                <!-- /.medical-report-card-content -->

                <!-- physical-examination-card-content -->
                <div class="card mt-3 ml-2" style="width: 18rem;" id="patient-card">
                    <div class="card-img-top" id="patient-card-header">
                        <div class="center-block" id="patient-card-circle">
                            <i class="fa fa-user-md fa-5x" id="formular-manager-icon-plus"></i>
                        </div>
                    </div>

                    <div class="card-body">
                        <h2 class="card-title">{{ __('Körperliche Untersuchung') }}</h2>
                    </div>

                    <div class="card-footer" id="formular-footer">
                        <h5>
                            <div class="row">
                                <a href="{{ url('/dashboard/formular/untersuchung') }}" class="card-link" id="patient-link">{{ __('Formular bearbeiten') }}</a>
                            </div>
                            <div class="row">
                                <a href="#" data-toggle="modal" data-target="#delete" id="medical-report-link">{{ __('Formular löschen') }}</a>
                            </div>
                        </h5>
                    </div>
                </div>
                <!-- /.physical-examination-card-content -->

                <!-- new-form-card-content -->
                <div class="card mt-3 ml-2" style="width: 18rem;" id="patient-card">
                    <div class="card-img-top" id="patient-card-header">
                        <div class="center-block" id="patient-card-circle">
                            <i class="fa fa-plus fa-5x" id="formular-manager-icon-plus"></i>
                        </div>
                    </div>

                    <div class="card-body">
                        <h2 class="card-title">{{ __('Neues Formular hinzufügen') }}</h2>
                    </div>

                    <div class="card-footer" id="formular-footer">
                        <h5>
                            <div class="row">
                                <a href="#" class="card-link" id="patient-link">{{ __('Hinzufügen') }}</a>
                            </div>
                        </h5>
                    </div>
                </div>
                <!-- /.new-form-card-content -->
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">

        <!-- modal-dialog -->
        <div class="modal-dialog">

            <!-- modal-content -->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title custom_align" id="Heading">{{ __('Formular löschen') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                </div>

                <div class="modal-body">
                    <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> {{ __(' Soll das Formular entgültig gelöscht werden?') }}</div>
                </div>

                <div class="modal-footer ">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="moki-button"><span class="glyphicon glyphicon-ok-sign"></span>{{ __(' Ja') }}</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>{{ __(' Nein') }}</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection