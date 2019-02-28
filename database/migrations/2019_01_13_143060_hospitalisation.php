<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hospitalisation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitalisation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->integer('ward_id')->unsigned();
            $table->date('admission_date');
            $table->date('discharge_date');
            $table->integer('diagnosis_id')->unsigned();
            $table->integer('anamnesis_questionaire_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('hospitalisation', function ($table) {
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('ward_id')->references('id')->on('wards')->onDelete('cascade');
            $table->foreign('diagnosis_id')->references('id')->on('diagnosis')->onDelete('cascade');
            $table->foreign('anamnesis_questionaire_id')->references('id')->on('anamnesis_questionaire')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hospitalisation');
    }
}
