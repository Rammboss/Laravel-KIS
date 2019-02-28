@extends('layouts.sidebar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

    $(window).on('load', function () {
        $('#patientEnrollmentModal').modal('show');
    });

</script>
@section('content')
    <div class="container">
        <!-- modal -->
        <div class="modal" id="patientEnrollmentModal" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- modal-content -->
                <form action="{{route('patients.store')}}" method="post">
                    @csrf
                    <div class="modal-content">

                        <!-- modal-header -->
                        <div class="modal-header">
                            <h4 class="modal-title custom_align" id="Heading">{{ __('Patientenaufnahme') }}</h4>
                            <button onclick="window.location='{{ url("/home") }}'" type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        </div>

                        <div class="modal-body">

                            <!-- first-row -->
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="first_name">{{ __('Vorname') }}</label>
                                        <input name="first_name" type="text" class="form-control" id="first_name">
                                    </div>

                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="last_name">{{ __('Nachname') }}</label>
                                        <input name="last_name" type="text" class="form-control" id="last_name">
                                    </div>
                                </div>

                                <div class="col-3">
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="ward">{{ __('Station') }}</label>
                                        <select name="ward" class="form-control" id="ward">
                                            @foreach(\Illuminate\Support\Facades\DB::table('wards')->get() as $ward)
                                                <option value="{!! $ward->id !!}">{!! $ward->ward_name !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="room">{{ __('Zimmer') }}</label>
                                        <select name="room" class="form-control" id="room">
                                            <option>{{ __('201') }}</option>
                                            <option>{{ __('202') }}</option>
                                            <option>{{ __('203') }}</option>
                                            <option>{{ __('204') }}</option>
                                            <option>{{ __('205') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- second-row -->
                            <div class="row">
                                <div class="col-1">
                                    <div class="form-group">
                                        <label for="clinic_id">{{ __('Klinik ID') }}</label>
                                        <input name="clinic_id" type="text" class="form-control" id="clinic_id">
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="birthday">{{ __('Geburtsdatum') }}</label>
                                        <input name="birthday" type="date" class="form-control" id="birthday">
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="sex">{{ __('Geschlecht') }}</label>
                                        <select name="sex" class="form-control" id="sex">
                                            <option value="m">{{ __('männlich') }}</option>
                                            <option value="w">{{ __('weiblich') }}</option>
                                            <option value="x">{{ __('unbekannt') }}</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="comment">{{ __('Kommentar') }}</label>
                                        <input name="comment" type="text" class="form-control" id="comment">
                                    </div>
                                </div>
                            </div>

                            <!-- third-row -->
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="address">{{ __('Adresse') }}</label>
                                        <input name="address" type="text" class="form-control" id="address">
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="telephone">{{ __('Telefon') }}</label>
                                        <input name="telephone" type="tel" class="form-control" id="telephone">
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="mobil">{{ __('Mobil') }}</label>
                                        <input name="mobil" type="tel" class="form-control" id="mobil">
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="email">{{ __('E-Mail') }}</label>
                                        <input name="email" type="email" class="form-control" id="email">
                                    </div>
                                </div>
                            </div>

                            <!-- fourth-row -->
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="health-insurance">{{ __('Krankenkasse') }}</label>
                                        <select name="health-insurance" class="form-control" id="health-insurance">
                                            <option>{{ __('AOK Hessen') }}</option>
                                            <option>{{ __('Bahn BKK') }}</option>
                                            <option>{{ __('Techniker Krankenkasse') }}</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="health-insurance-number">{{ __('Krankenkassennummer') }}</label>
                                        <input type="text" class="form-control" id="health-insurance-number">
                                    </div>
                                </div>
                            </div>

                            <!-- fifth-row -->
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="family-doctor">{{ __('Hausarzt') }}</label>
                                        <input type="text" class="form-control" id="family-doctor">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="family-doctor-adress">{{ __('Adresse') }}</label>
                                        <input type="text" class="form-control" id="family-doctor-adress">
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="family-doctor-telephone">{{ __('Telefon') }}</label>
                                        <input type="tel" class="form-control" id="family-doctor-telephone">
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="family-doctor-mobil">{{ __('Mobil') }}</label>
                                        <input type="tel" class="form-control" id="family-doctor-mobil">
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="family-doctor-e-mail">{{ __('E-Mail') }}</label>
                                        <input type="email" class="form-control" id="family-doctor-e-mail">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- modal-footer -->
                        <div class="modal-footer">
                            <button onclick="window.location='{{ url("/home") }}'" type="button"
                                    class="btn btn-outline-default" data-dismiss="modal">{{ __('Schließen') }}
                            </button>
                            <input name="submit" type="submit" class="btn btn-success" id="moki-button"
                                   value="Patient speichern">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection