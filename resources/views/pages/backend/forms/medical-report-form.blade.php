@extends('layouts.administration-area')

@section('content')
    <div id="page-wrapper">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>

            <!-- card -->
            <div class="card">
                <div class="card-header">
                    {{ __('Arztbrief') }}
                </div>

                <!-- card-content -->
                <div class="card-body">

                    <!-- text-editor -->
                    <div id="summernote"></div>
                    <script>
                        $('#summernote').summernote({
                            placeholder: '<h1>Arztbrief</h1><br>\n' +
                                '<b>{ Anrede } { Titel } { Name_Hausarzt } { Nachname_Hausarzt }</b>\n' +
                                '<div class="container" style="padding-left: 60%">\n' +
                                '<b>{ Musterklinik }</b><br>\n' +
                                '<b>{ Benutzername }</b><br>\n' +
                                '<b>{ Benutzerspezifikation }</b><br>\n' +
                                '<b>{ Musterklinikanschrift }</b><br>\n' +
                                '</div>\n' +
                                '<p><b>Entlassungsbericht</b></p>\n' +
                                '<p>Sehr geehrter <b>{ Anrede }</b> <b>{ Hausarzt }</b>,</p>\n' +
                                '<p>nachfolgend berichten wir Ihnen über <b>{ Anrede } { Name } { Nachname }</b> geb. am <b>{ Geburtsdatum }</b> , wohnhaft in <b>{ Adresse }</b>\n' +
                                ', der sich vom <b>{ Aufnahmedatum }</b> bis zum <b>{ Entlassungsdatum }</b> in unserer stationären Behandlung befand.</p>\n' +
                                '<p><ins>Diagnosen</ins><br>\n' +
                                'Hauptdiagnose: <b>{ Hauptdiagnose }</b><br>\n' +
                                'Nebendiagnose(n): <b>{ Nebendiagnose(n) }</b></p>\n' +
                                '<p><ins>Untersuchung</ins><br>\n' +
                                'Anamnese: <b>{ Anamnese }</b><br>\n' +
                                'Körperliche Untersuchung: <b>{ Körperliche Untersuchung }</b><br>\n' +
                                'Spezielle Untersuchung: <b>{ Spezielle Untersuchung }</b></p>\n' +
                                '<p><ins>Behandlung</ins><br>\n' +
                                'Behandlungsprotokoll: <b>{ Behandlungsprotokoll: }</b><br>\n' +
                                'Pflegeprotokoll: <b>{ Pflegeprotokoll: }</b><br>\n' +
                                'Medikationsplan: <b>{ Medikationsplan: }</b></p>\n' +
                                '<p><b>{ Freitext }</b></p>\n' +
                                '<p>Wir danken für das Vertrauen in unser Haus und verbleiben mit freundlichen, kollegialen Grüßen</p>\n' +
                                '<p><b>{ Unterschrift }<br>\n' +
                                '<b>{ Benutzername }<br>\n' +
                                '{ Benutzerberuf }</p>'
                            ,
                            tabsize: 2,
                            height: 760
                        });
                    </script>
                </div>
                <!-- /.card-content -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection