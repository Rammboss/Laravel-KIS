@extends('layouts.administration-area')

@section('content')
    <div id="page-wrapper">
        <div class="col-lg-12">
            <h1 class="page-header">{{ __('Benutzerverwaltung') }}</h1>

            <!-- card -->
            <div class="card">
                <div class="card-header">
                    <form class="form-inline my-2 my-lg-0">

                        <!-- search-user -->
                        <input class="form-control mr-sm-2" type="search" placeholder="Benutzer" aria-label="Search">
                        <button class="btn btn-outline-secondary">{{ __('Suchen') }}</button>
                    </form>
                </div>

                <!-- card-content -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">

                                <!-- table -->
                                <table id="mytable" class="table table-bordred table-striped">
                                    <thead>
                                    <tr>
                                        <th><label for="checkall"></label><input type="checkbox" id="checkall" /></th>
                                        <th>{{ __('ID') }}</th>
                                        <th>{{ __('Titel') }}</th>
                                        <th>{{ __('Vorname') }}</th>
                                        <th>{{ __('Nachname') }}</th>
                                        <th>{{ __('E-Mail') }}</th>
                                        <th>{{ __('Telefon') }}</th>
                                        <th>{{ __('Mobil') }}</th>
                                        <th>{{ __('Geschlecht') }}</th>
                                        <th>{{ __('Stations-ID') }}</th>
                                        <th>{{ __('Rolle') }}</th>
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
                                        <td>{{ __('1') }}</td>
                                        <td>{{ __('Dr.') }}</td>
                                        <td>{{ __('Andrea') }}</td>
                                        <td>{{ __('Schmidt') }}</td>
                                        <td>{{ __('andrea.schmidt@clinic.de') }}</td>
                                        <td>{{ __('0641256781') }}</td>
                                        <td>{{ __('017657951328') }}</td>
                                        <td>{{ __('weiblich') }}</td>
                                        <td>{{ __('1') }}</td>
                                        <td>{{ __('Chefarzt') }}</td>
                                        <td><p data-placement="top" data-toggle="tooltip"><button class="btn btn-primary btn-xs"  id="edit-button" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                        <td><p data-placement="top" data-toggle="tooltip"><button class="btn btn-danger btn-xs" id="delete-button" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label>
                                                <input type="checkbox" class="checkthis" />
                                            </label>
                                        </td>
                                        <td>{{ __('2') }}</td>
                                        <td>{{ __('') }}</td>
                                        <td>{{ __('Christopher') }}</td>
                                        <td>{{ __('Robin') }}</td>
                                        <td>{{ __('christopher.robin@clinic.de') }}</td>
                                        <td>{{ __('0641256781') }}</td>
                                        <td>{{ __('017657951328') }}</td>
                                        <td>{{ __('männlich') }}</td>
                                        <td>{{ __('') }}</td>
                                        <td>{{ __('Admin') }}</td>
                                        <td><button class="btn btn-primary btn-xs" id="edit-button" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></td>
                                        <td><p data-placement="top" data-toggle="tooltip"><button class="btn btn-danger btn-xs" id="delete-button" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                    </tr>
                                    </tbody>

                                </table>
                                <div class="clearfix"></div>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#new-user" id="moki-button">{{ __('Benutzer hinzufügen') }}</button>
                                <ul class="pagination pull-right">
                                    <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                    <li class="active"><a href="#">{{ __('1') }}</a></li>
                                    <li><a href="#">{{ __('2') }}</a></li>
                                    <li><a href="#">{{ __('3') }}</a></li>
                                    <li><a href="#">{{ __('4') }}</a></li>
                                    <li><a href="#">{{ __('5') }}</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">

            <!-- edit-user-modal-dialog -->
            <div class="modal-dialog">

                <!-- edit-user-modal-content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title custom_align" id="Heading">{{ __('Benutzer bearbeiten') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="ID">
                        </div>
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="Vorname">
                        </div>
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="Nachname">
                        </div>
                        <div class="form-group">
                            <textarea rows="2" class="form-control" placeholder="Addresse"></textarea>
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
                                    <input class="form-control " type="text" placeholder="Mobil">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sel1">{{ __('Geschlecht') }}</label>
                            <select class="form-control" id="sel1">
                                <option>{{ __('männlich') }}</option>
                                <option>{{ __('weiblich') }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input class="form-control " type="text" placeholder="Stations-ID">
                                </div>
                                <div class="col-lg-6">
                                    <input class="form-control " type="text" placeholder="Rolle">
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

            <!-- delete-user-modal-dialog -->
            <div class="modal-dialog">

                <!-- delete-user-modal-content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title custom_align" id="Heading">{{ __('Benutzer löschen') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">

                        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> {{ __(' Soll der Benutzer entgültig gelöscht werden?') }}</div>

                    </div>
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-success" data-dismiss="modal" id="moki-button"><span class="glyphicon glyphicon-ok-sign"></span>{{ __(' Ja') }}</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>{{ __(' Nein') }}</button>
                    </div>
                </div>
                <!-- /.delete-user-modal-content -->
            </div>
            <!-- /.delete-user-modal-dialog -->
        </div>
    </div>

    <div class="modal fade" id="new-user" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">

        <!-- new-user-modal-dialog -->
        <div class="modal-dialog">

            <!-- new-user-modal-content -->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title custom_align" id="Heading">{{ __('Benutzer hinzufügen') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="ID">
                    </div>
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Vorname">
                    </div>
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Nachname">
                    </div>
                    <div class="form-group">
                        <textarea rows="2" class="form-control" placeholder="Addresse"></textarea>
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
                                <input class="form-control " type="text" placeholder="Mobil">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sel1">{{ __('Geschlecht') }}</label>
                        <select class="form-control" id="sel1">
                            <option>{{ __('männlich') }}</option>
                            <option>{{ __('weiblich') }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <input class="form-control " type="text" placeholder="Stations-ID">
                            </div>
                            <div class="col-lg-6">
                                <input class="form-control " type="text" placeholder="Rolle">
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
