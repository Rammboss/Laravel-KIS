@extends('layouts.administration-area')

@section('content')
    <div id="page-wrapper">
        <h1 class="page-header">{{ __('Patientenaufnahme') }}</h1>
        <div class="container" id="patient-container">
            @include('includes.field-management')
        </div>
    </div>
@endsection