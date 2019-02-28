<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatientsSecondaryDiagnosis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients_secondary_diagnosis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('diagnosis_id')->unsigned();
            $table->integer('hospitalisation_patient_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('patients_secondary_diagnosis', function ($table) {
            $table->foreign('diagnosis_id')->references('id')->on('diagnosis')->onDelete('cascade');
            $table->foreign('hospitalisation_patient_id')->references('patient_id')->on('hospitalisation')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patients_secondary_diagnosis');
    }
}
