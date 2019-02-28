<!DOCTYPE html>

<html lang="de">

<head>

    <!-- Styles -->
    <style>
        #clinic-header {
            float: right;
            width: 200px;
        }
    </style>
    <title>{{ __('medical-report-pdf') }}</title>

</head>

<body>
<br>
{{__('Herr ') }} {{ __($general_practitioner_name) }}<br>
{{ __($general_practitioner_address) }}

<h1>Arztbrief</h1>

<div class="container">
    <div class="container" id="clinic-header">
        {{ __('Musterklinik') }}<br>
        {{ __($user_first_name . ' ' . $user_name ) }}<br>
        {{ __($userJob) }}<br>
        {{ __('Musterklinikanschrift') }}
    </div>
    <br><br><br><br>
    <p><b>{{ __('Entlassungsbericht') }}</b></p>
    <p>{{ __('Sehr') }} {{'geehrter Herr '. $general_practitioner_name .',' }}
        <br>{{ __('nachfolgend berichten wir Ihnen über ') }}

        {{ __('Herr ') . $patient_first_name .' ' . $patient_name }} {{ __('geb. am ')  }} {{ __($patient_date_of_birth) }}
        , {{ __('wohnhaft in') }} {{ __($patient_address) }},

        {{ __('der ') }} {{ __('sich vom ') }} {{ __($patient_aufnahme) }} {{ __('bis zum ') }} {{ __($patient_entlassungsdatum) }}

        {{ __('in unserer stationären Behandlung befand.') }}</p>

    <p>
        <ins><b>{{ __('Diagnosen') }}</b></ins><br>
        {{ __('Hauptdiagnose:') }} {{ __($main_diagnosis) }}<br>
        @if($secondary_diagnosis)
            {{ __('Nebendiagnose(n):') }} {{ __($secondary_diagnosis) }}
        @endif
    </p>


    <p>
        <ins><b>{{ __('Untersuchung') }}</b></ins>
        <br>
        @if($recent_anamnesis || $previous_anamnesis || $vegetative_anamnesis ||$risk_anamnesis ||$drug_anamnesis ||$gender_based_anamnesis ||$family_anamnesis ||
        $social_anamnesis ||$further_anamnesis)
            {{ __('Anamnese:') }}<br><br>
            @if($recent_anamnesis)
                <ins>{{ __("Aktuelle Anamnese") }}</ins><br>
                {{ __($recent_anamnesis) }}<br><br>
            @endif
            @if($previous_anamnesis)
                <ins>{{ __('Frühere Anamnese') }}</ins><br>
                {{ __($previous_anamnesis) }}<br><br>
            @endif
            @if($vegetative_anamnesis)
                <ins>{{ __('Vegetative Anamnese') }}</ins><br>
                {{ __($vegetative_anamnesis) }}<br><br>
            @endif
            @if($risk_anamnesis)
                <ins>{{ __('Risikoanamnese') }}</ins><br>
                {{ __($risk_anamnesis) }}<br><br>
            @endif
            @if($drug_anamnesis)
                <ins>{{ __('Medikamenten- und Suchtmittelanamnese') }}</ins><br>
                {{ __($drug_anamnesis) }}<br><br>
            @endif
            @if($gender_based_anamnesis)
                <ins>{{ __('Geschlechterspezifische Anamnese') }}</ins><br>
                {{ __($gender_based_anamnesis) }}<br><br>
            @endif
            @if($family_anamnesis)
                <ins>{{ __('Familienanamnese') }}</ins><br>
                {{ __($family_anamnesis) }}<br><br>
            @endif
            @if($social_anamnesis)
                <ins>{{ __('Sozialanamnese') }}</ins><br>
                {{ __($social_anamnesis) }}<br><br>
            @endif
            @if($further_anamnesis)
                <ins>{{ __('Sonstige Anamnese') }}</ins><br>
                {{ __($further_anamnesis) }}<br><br>
            @endif
        @endif

        @if($physical_examination)
            <ins>{{ __('Körperliche Untersuchung:') }}</ins>
                {{ __($physical_examination) }}<br><br>
        @endif

        @if($special_examination)
            <ins>{{ __('Spezielle Untersuchung:') }}</ins>
                {{ __($special_examination) }}
        @endif
    </p>

    @if($treatment_protocol || $care_protocol || $medication_schedule)
        <ins><b>{{ __('Behandlung') }}</b></ins>
        <br>
    @endif

        @if($treatment_protocol)
            <ins>{{ __('Behandlungsprotokoll:') }}</ins>
        {{ __($treatment_protocol) }}<br>
        @endif

        @if($care_protocol)
            <ins>{{ __('Pflegeprotokoll:') }}</ins>
        {{ __($care_protocol) }}<br>
        @endif
        @if($medication_schedule)
            <ins>{{ __('Medikationsplan:') }}</ins>
        {{ __($medication_schedule) }}
        @endif


    @if($freetext)
        <p>{{ __($freetext) }}</p>
    @endif

    <p>{{ __('Wir danken für das Vertrauen in unser Haus und verbleiben mit freundlichen, kollegialen Grüßen') }}</p>

    <p>{{ __('Unterschrift') }}<br>

        {{ __($user_first_name . ' ' . $user_name) }}<br>

        {{ __($userJob) }}</p>
</div>

</body>

</html>
