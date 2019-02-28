<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('pages.frontend.home');

Route::get('/notaufnahme', function () {
    return view('pages.frontend.ward-emergency-department');
})->middleware('auth');

Route::get('/gastroenterologie', function () {
    return view('pages.frontend.ward-gastroenterology');
})->middleware('auth');

Route::get('/kardiologie', function () {
    return view('pages.frontend.ward-kardiology');
})->middleware('auth');

Route::get('/neurologie', function () {
    return view('pages.frontend.ward-neurology');
})->middleware('auth');

Route::get('/pneumologie', function () {
    return view('pages.frontend.ward-pneumology');
})->middleware('auth');

Route::get('/radiologie', function () {
    return view('pages.frontend.ward-radiology');
})->middleware('auth');

Route::get('/patient/{patient}/anamnese/{anamnesis}', 'AnamnesisController@show')->middleware('auth');
Route::get('/patient/{patient}/anamnese/', 'AnamnesisController@show')->middleware('auth');


Route::get('/patient/{patient}/{anamnesis}/arztbrief', 'MedicalReportController@show')->middleware('auth');

Route::get('/patient/{patient}/untersuchung', 'ClinicalExaminationController@show')->middleware('auth');

Route::get('/patient/{patient}', 'PatientController@show')->middleware('auth')->name('patient.show');

Route::get('/dashboard', function () {
    return view('pages.backend.dashboard');
})->middleware('auth');

Route::get('/dashboard/formularmanager', function () {
    return view('pages.backend.formular-manager');
})->middleware('auth');

Route::get('/dashboard/benutzerverwaltung', function () {
    return view('pages.backend.user-manager');
})->middleware('auth');

Route::get('/dashboard/stationsverwaltung', function () {
    return view('pages.backend.ward-manager');
})->middleware('auth');

Route::get('/dashboard/formular/anamnese', function () {
    return view('pages.backend.forms.anamnesis-questionaire-form');
})->middleware('auth');

Route::get('/dashboard/formular/arztbrief', function () {
    return view('pages.backend.forms.medical-report-form');
})->middleware('auth');

Route::get('/dashboard/formular/untersuchung', function () {
    return view('pages.backend.forms.physical-examination-form');
})->middleware('auth');

Route::get('/dashboard/patientenaufnahme', function () {
    return view('pages.backend.patient-enrollment-manager');
})->middleware('auth');

Route::get('/dashboard/krankenkassen', function () {
    return view('pages.backend.health-insurance-manager');
})->middleware('auth');

Route::get('/dashboard/news', function () {
    return view('pages.backend.news');
})->middleware('auth');

Route::get('/patientenaufnahme/create', function () {
    return view('includes.patient-enrollment-modal');
})->name('patients.create')->middleware('auth');

Route::get('/patient/{patient}/{anamnesis}/arztbrief/generatePDF','HomeController@generatePDF')->name('home.test')->middleware('auth');

Route::post('/patientenaufnahme', 'PatientController@store')->name('patients.store')->middleware('auth');
Route::post('/patient/{patient}/anamnese', 'AnamnesisController@store')->name('anamnesis.store')->middleware('auth');
