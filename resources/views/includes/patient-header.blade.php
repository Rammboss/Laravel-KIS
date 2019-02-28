<div class="row mb-5">

    <!-- patient-qr-code -->
    <div class="border border-dark" id="patient-circle">
        <img class="center-block" id="patient-qr-code" src="{{ URL::to('/image/BeispielQrCode.png') }}" alt="PatientQrCode">
    </div>

    <!-- patient-base-data -->
    <div class="col-lg-4" >
        <div class="container" id="patient-header">
            <h5 class="card-title">
                {{ $patient->first_name . " " . $patient->name }}
            </h5>
            <div class="row">
                <h6 class="card-subtitle mb-2 text-muted" style="padding-left: 15px">{{ __('Zimmer') }}
                    {{$patient->room}}
                    <a href="#" class="card-link" data-toggle="modal" data-target="#diagnosis-modal" id="patient-link">
                        {{ __('Diagnose') }}
                    </a>
                </h6>
            </div>
        </div>
    </div>

    <!-- diagnosis-link -->
    <a class='card-icon' href="#" data-toggle="modal" data-target="#master-data-modal">
        <img src="{{ URL::to('/image/PatientCardIcon@2x.png') }}" alt="MoKi" width="60px" />
    </a>
</div>

<div class="container">
    <!-- diagnosis-modal -->
    <div class="modal fade" id="diagnosis-modal" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- modal-content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title custom_align" id="Heading">{{ __('Diagnose') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="diagnosis">{{ __('Hauptdiagnose') }}</label>
                        <select class="form-control" id="diagnosis">
                            <option>{{ __('Musterkrankheit') }}</option>
                            <option>{{ __('A00.0 Cholera durch Vibrio cholerae O:1, Biovar cholerae') }}</option>
                            <option>{{ __('A00.1 Cholera durch Vibrio cholerae O:1, Biovar eltor') }}</option>
                            <option>{{ __('A00.9 Cholera, nicht näher bezeichnet') }}</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="secondary-diagnosis">{{ __('Nebendiagnosen') }}</label>
                        <p>
                            <select class="form-control" id="secondary-diagnosis">
                                <option>{{ __('Musterkrankheit') }}</option>
                                <option>{{ __('A00.0 Cholera durch Vibrio cholerae O:1, Biovar cholerae') }}</option>
                                <option>{{ __('A00.1 Cholera durch Vibrio cholerae O:1, Biovar eltor') }}</option>
                                <option>{{ __('A00.9 Cholera, nicht näher bezeichnet') }}</option>
                            </select>
                        </p>
                        <p>
                            <select class="form-control" id="secondary-diagnosis">
                                <option>{{ __('Musterkrankheit') }}</option>
                                <option>{{ __('A00.0 Cholera durch Vibrio cholerae O:1, Biovar cholerae') }}</option>
                                <option>{{ __('A00.1 Cholera durch Vibrio cholerae O:1, Biovar eltor') }}</option>
                                <option>{{ __('A00.9 Cholera, nicht näher bezeichnet') }}</option>
                            </select>
                        </p>
                        <p>
                            <select class="form-control" id="secondary-diagnosis">
                                <option>{{ __('Musterkrankheit') }}</option>
                                <option>{{ __('A00.0 Cholera durch Vibrio cholerae O:1, Biovar cholerae') }}</option>
                                <option>{{ __('A00.1 Cholera durch Vibrio cholerae O:1, Biovar eltor') }}</option>
                                <option>{{ __('A00.9 Cholera, nicht näher bezeichnet') }}</option>
                            </select>
                        </p>
                        <p>
                            <select class="form-control" id="secondary-diagnosis">
                                <option>{{ __('Musterkrankheit') }}</option>
                                <option>{{ __('A00.0 Cholera durch Vibrio cholerae O:1, Biovar cholerae') }}</option>
                                <option>{{ __('A00.1 Cholera durch Vibrio cholerae O:1, Biovar eltor') }}</option>
                                <option>{{ __('A00.9 Cholera, nicht näher bezeichnet') }}</option>
                            </select>
                        </p>
                        <a href="#">
                            <i class="fa fa-plus-circle fa-2x" style="color: #80ba24"></i>
                        </a>
                    </div>
                </div>

                <!-- modal-footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-default" data-dismiss="modal">{{ __('Schließen') }}</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="moki-button">{{ __('Änderungen speichern') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- master-data-modal -->
    <div class="modal fade" id="master-data-modal" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- modal-content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Stammdaten') }}</h4>
                    <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                </div>

                <div class="modal-body">
                    <fieldset class="disabled">
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="first-name">{{ __('Vorname') }}</label>
                                    <input type="text" class="form-control" id="first-name" value={{$patient->first_name}}>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-group">
                                    <label for="last-name">{{ __('Nachname') }}</label>
                                    <input type="text" class="form-control" id="last-name" value={{$patient->name}}>
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
                                    <select class="form-control" id="room">
                                        <option>{{$patient->room}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-1">
                                <div class="form-group">
                                    <label for="id">{{ __('Klinik ID') }}</label>
                                    <input type="text" class="form-control" id="id" value={{$patient->clinic_id}}>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="form-group">
                                    <label for="birthday">{{ __('Geburtsdatum') }}</label>
                                    <input type="date" class="form-control" id="birthday" value={{$patient->date_of_birth}}>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="form-group">
                                    <label for="sex">{{ __('Geschlecht') }}</label>
                                    <select class="form-control" id="sex" >
                                        <option value="m">{{ __('männlich') }}</option>
                                        <option value="w">{{ __('weiblich') }}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="comment">{{ __('Kommentar') }}</label>
                                    <input type="text" class="form-control" id="comment" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="adress">{{ __('Adresse') }}</label>
                                    <input type="text" class="form-control" id="adress" value={{$patient->address}}>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="form-group">
                                    <label for="telephone">{{ __('Telefon') }}</label>
                                    <input type="tel" class="form-control" id="telephone" value={{$patient->phone}}>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="form-group">
                                    <label for="mobil">{{ __('Mobil') }}</label>
                                    <input type="tel" class="form-control" id="mobil"value={{$patient->mobile}}>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="form-group">
                                    <label for="e-mail">{{ __('E-Mail') }}</label>
                                    <input type="email" class="form-control" id="e-mail" value={{$patient->mail}}>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="health-insurance">{{ __('Krankenkasse') }}</label>
                                    <select class="form-control" id="health-insurance">
                                        <option>{{ __('AOK Hessen') }}</option>
                                        <option>{{ __('Bahn BKK') }}</option>
                                        <option value="1">{{ __('Techniker Krankenkasse') }}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="form-group">
                                    <label for="health-insurance-number">{{ __('Krankenkassennummer') }}</label>
                                    <input type="text" class="form-control" id="health-insurance-number" value={{$patient->health_insurance_number}}>
                                </div>
                            </div>
                        </div>

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
                    </fieldset>
                </div>

                <!-- modal-footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-default" data-dismiss="modal">{{ __('Schließen') }}</button>
                    <input type="button" value="Stammdaten bearbeiten" class="btn btn-danger" onclick="myFunction()" id="master-data-btn">
                    <input type="button" value="Patient speichern" class="btn btn-success"  data-dismiss="modal" id="master-data-btn-success" style="display: none" onclick="reset()">
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    window.onload = codeAddress;

    function myFunction() {
        $('.disabled :input').prop('disabled', false);
        document.getElementById("master-data-btn-success").style.display = 'block';
        $("#master-data-btn").hide();
    }

    function reset() {
        $('.disabled :input').prop('disabled', true);
        document.getElementById("master-data-btn-success").style.display = 'none';
        $("#master-data-btn").show();
    }

    $('.disabled :input').prop('disabled', true);

    function codeAddress() {
        $("#sex").val({{$patient->gender}});
        $("#health-insurance").val({{$patient->health_insurance_number}});
        $("#ward").val({{$patient->ward_id}});
    }
</script>