<div class="table-responsive">
    <table id="mytable" class="table table-bordred">
        <!-- table-content -->
        <tbody>
        <!-- first-table-row -->
        <tr>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="first-name" checked>
                            <label class="custom-control-label" for="first-name">{{ __('Vorname') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" value="3" id="suspected_diagnosis">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="last-name" checked>
                            <label class="custom-control-label" for="last-name">{{ __('Nachname') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="3">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header">
                        <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="">
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="" class="btn btn-sm btn-primary" id="moki-button">{{ __('Hinzufügen') }}</a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="ward" checked>
                            <label class="custom-control-label" for="ward">{{ __('Station') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="1">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="room" checked>
                            <label class="custom-control-label" for="room">{{ __('Raum') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="1">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
        </tr>
        <!-- /.first-table-row -->

        <!-- second-table-row -->
        <tr>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="id" checked>
                            <label class="custom-control-label" for="id">{{ __('Klinik ID') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" value="1">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="birthday" checked>
                            <label class="custom-control-label" for="birthday">{{ __('Geburtsdatum') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="2">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="sex" checked>
                            <label class="custom-control-label" for="sex">{{ __('Geschlecht') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="2">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="comment" checked>
                            <label class="custom-control-label" for="comment">{{ __('Kommentar') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="4">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header">
                        <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="">
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="" class="btn btn-sm btn-primary" id="moki-button">{{ __('Hinzufügen') }}</a>
                    </div>
                </div>
            </td>
        </tr>
        <!-- /.second-table-row -->

        <!-- third-table-row -->
        <tr>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="address" checked>
                            <label class="custom-control-label" for="address">{{ __('Adresse') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="4">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="telephone" checked>
                            <label class="custom-control-label" for="telephone">{{ __('Telefon') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="2">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="mobile" checked>
                            <label class="custom-control-label" for="mobile">{{ __('Mobil') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="2">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="e-mail" checked>
                            <label class="custom-control-label" for="e-mail">{{ __('E-Mail') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="2">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header">
                        <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="">
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="" class="btn btn-sm btn-primary" id="moki-button">{{ __('Hinzufügen') }}</a>
                    </div>
                </div>
            </td>
        </tr>
        <!-- /.third-table-row -->

        <!-- fourth-table-row -->
        <tr>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="health-insurance" checked>
                            <label class="custom-control-label" for="health-insurance">{{ __('Krankenkasse') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="2">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="health-insurance-number" checked>
                            <label class="custom-control-label" for="health-insurance-number">{{ __('Kassennummer') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="2">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header">
                        <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="">
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="" class="btn btn-sm btn-primary" id="moki-button">{{ __('Hinzufügen') }}</a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header">
                        <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="">
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="" class="btn btn-sm btn-primary" id="moki-button">{{ __('Hinzufügen') }}</a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header">
                        <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="">
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="" class="btn btn-sm btn-primary" id="moki-button">{{ __('Hinzufügen') }}</a>
                    </div>
                </div>
            </td>
        </tr>
        <!-- /.fourth-table-row -->

        <!-- fifth-table-row -->
        <tr>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="family-doctor" checked>
                            <label class="custom-control-label" for="family-doctor">{{ __('Hausarzt') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="2">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="family-doctor-telephone" checked>
                            <label class="custom-control-label" for="family-doctor-telephone">{{ __('Telefon') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="4">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="family-doctor-mobile" checked>
                            <label class="custom-control-label" for="family-doctor-mobile">{{ __('Mobil') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="2">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="family-doctor-e-mail" checked>
                            <label class="custom-control-label" for="family-doctor-e-mail">{{ __('E-Mail') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}
                                <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="2"></label>
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
            <td>
                <!-- card -->
                <div class="card text-center" style="width: 12rem;">
                    <div class="card-header" id="field-card-header">
                        <!-- custom-checkbox -->
                        <div class="custom-control custom-checkbox" style="float: left">
                            <input type="checkbox" class="custom-control-input checkbox-inline" id="first-name" checked>
                            <label class="custom-control-label" for="first-name">{{ __('Vorname') }}</label>
                        </div>
                    </div>
                    <!-- card-content -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label for="suspected_diagnosis">{{ __('Breite') }}</label>
                            <input type="text" class="form-control" id="suspected_diagnosis" name="suspected_diagnosis" value="2">
                        </li>
                    </ul>
                    <!-- card-footer -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary " id="edit-button"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-sm btn-danger" id="delete-button"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            </td>
        </tr>
        <!-- /.fifth-table-row -->

        <!-- sixth-table-row -->
        <tr>
            <td>
                <!-- add-new-row-button -->
                <a href="#">
                    <button class="btn btn-success" id="add-field-button">
                        <i class="fa fa-plus-circle fa-3x"></i>
                    </button>
                </a>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <!-- /.sixth-table-row -->
        </tbody>
        <!-- /.table-content -->
    </table>
</div>