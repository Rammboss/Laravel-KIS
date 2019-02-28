@extends('layouts.administration-area')

@section('content')
    <div id="page-wrapper">
        <div class="col-lg-12">
            <h1 class="page-header">{{ __('Krankenkassenverwaltung') }}</h1>

            <!-- card -->
            <div class="card">

                <!-- card-content -->
                <div class="card-header">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Krankenkasse" aria-label="Search">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Suchen</button>
                    </form>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="mytable" class="table table-bordred table-striped">
                                    <thead>
                                    <tr>
                                        <th><label for="checkall"></label><input type="checkbox" id="checkall" /></th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Straße') }}</th>
                                        <th>{{ __('PLZ') }}</th>
                                        <th>{{ __('Ort') }}</th>
                                        <th>{{ __('E-Mail') }}</th>
                                        <th>{{ __('Telefon') }}</th>
                                        <th>{{ __('Fax') }}</th>
                                        <th>{{ __('Bearbeiten') }}</th>
                                        <th>{{ __('Löschen') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <label>
                                                <input type="checkbox" class="checkthis" />
                                            </label>
                                        </td>
                                        <td>{{ __('AOK Hessen') }}</td>
                                        <td>{{ __('Basler Straße 2') }}</td>
                                        <td>{{ __('61352') }}</td>
                                        <td>{{ __('Bad Homburg') }}</td>
                                        <td>{{ __('service@he.aok.de') }}</td>
                                        <td>{{ __('+498000000255') }}</td>
                                        <td>{{ __('+469850917920') }}</td>
                                        <td><p data-placement="top" data-toggle="tooltip"><button class="btn btn-primary btn-xs" id="edit-button" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                        <td><p data-placement="top" data-toggle="tooltip"><button class="btn btn-danger btn-xs" id="delete-button" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label>
                                                <input type="checkbox" class="checkthis" />
                                            </label>
                                        </td>
                                        <td>{{ __('BAHN-BKK') }}</td>
                                        <td>{{ __('Franklinstraße 54') }}</td>
                                        <td>{{ __('60486') }}</td>
                                        <td>{{ __('Frankfurt') }}</td>
                                        <td>{{ __('service@bahn-bkk.de') }}</td>
                                        <td>{{ __('+4969770780') }}</td>
                                        <td>{{ __('+498002553293') }}</td>
                                        <td><p data-placement="top" data-toggle="tooltip"><button class="btn btn-primary btn-xs" id="edit-button" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                        <td><p data-placement="top" data-toggle="tooltip"><button class="btn btn-danger btn-xs" id="delete-button" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label>
                                                <input type="checkbox" class="checkthis" />
                                            </label>
                                        </td>
                                        <td>{{ __('Techniker Krankenkasse') }}</td>
                                        <td>{{ __('Bramfelder Straße 140') }}</td>
                                        <td>{{ __('22305') }}</td>
                                        <td>{{ __('Hamburg') }}</td>
                                        <td>{{ __('service@tk.de') }}</td>
                                        <td>{{ __('+494069090') }}</td>
                                        <td>{{ __('-') }}</td>
                                        <td><p data-placement="top" data-toggle="tooltip"><button class="btn btn-primary btn-xs" id="edit-button" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                        <td><p data-placement="top" data-toggle="tooltip"><button class="btn btn-danger btn-xs" id="delete-button" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                    </tr>
                                    </tbody>

                                </table>
                                <div class="clearfix"></div>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#new-user" id="moki-button">{{ __('Krankenkasse hinzufügen') }}</button>
                                <ul class="pagination pull-right">
                                    <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                    <li class="active"><a href="#">{{ __('1') }}</a></li>
                                    <li><a href="#">{{ __('2') }}</a></li>
                                    <li><a href="#">{{ __('3') }}</a></li>
                                    <li><a href="#">{{ __('4') }}</a></li>
                                    <li><a href="#">{{ __('5') }}</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                </ul>{{ __('') }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-content -->
            </div>
            <!-- /.card -->
        </div>

        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">

            <!-- edit-user-modal-dialog -->
            <div class="modal-dialog">

                <!-- edit-user-modal-content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title custom_align" id="Heading">{{ __('Krankenkasse bearbeiten') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="Straße">
                        </div>
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="PLZ">
                        </div>
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="Ort">
                        </div>
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="E-Mail">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input class="form-control " type="text" placeholder="Telefon">
                                </div>
                                <div class="col-lg-6">
                                    <input class="form-control " type="text" placeholder="Fax">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-primary btn-lg" id="moki-button" data-dismiss="modal" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>{{ __(' Aktualisieren') }}</button>
                    </div>
                </div>
                <!-- /.edit-user-modal-content -->
            </div>
            <!-- /.edit-user-modal-dialog -->
        </div>

        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">

            <!-- health-insurance-modal-dialog -->
            <div class="modal-dialog">

                <!-- health-insurance-modal-content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title custom_align" id="Heading">{{ __('Krankenkasse löschen') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    </div>

                    <div class="modal-body">
                        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>{{ __(' Soll die Krankenkasse entgültig gelöscht werden?') }}</div>
                    </div>

                    <div class="modal-footer ">
                        <button type="button" class="btn btn-success" data-dismiss="modal" id="moki-button"><span class="glyphicon glyphicon-ok-sign"></span>{{ __(' Ja') }}</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>{{ __(' Nein') }}</button>
                    </div>
                </div>
                <!-- /.health-insurance-modal-content -->
            </div>
            <!-- /.health-insurance-modal-dialog -->
        </div>
    </div>

    <div class="modal fade" id="new-user" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">

        <!-- new-user-modal-dialog -->
        <div class="modal-dialog">

            <!-- new-user-modal-content -->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title custom_align" id="Heading">{{ __('Krankenkasse hinzufügen') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Straße">
                    </div>
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="PLZ">
                    </div>
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Ort">
                    </div>
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="E-Mail">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <input class="form-control " type="text" placeholder="Telefon">
                            </div>
                            <div class="col-lg-6">
                                <input class="form-control " type="text" placeholder="Fax">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-primary btn-lg" id="moki-button" data-dismiss="modal" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>{{ __(' Hinzufügen') }}</button>
                </div>
            </div>
            <!-- /.new-user-modal-content -->
        </div>
        <!-- /.new-user-modal-dialog -->
    </div>

    <script>
        $(document).ready(function(){
            $("#mytable #checkall").click(function () {
                if ($("#mytable #checkall").is(':checked')) {
                    $("#mytable input[type=checkbox]").each(function () {
                        $(this).prop("checked", true);
                    });

                } else {
                    $("#mytable input[type=checkbox]").each(function () {
                        $(this).prop("checked", false);
                    });
                }
            });

            $("[data-toggle=tooltip]").tooltip();
        });
    </script>
@endsection
