<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnamnesisQuestionaire extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anamnesis_questionaire', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->mediumText('recent_anamnesis')->nullable();
            $table->mediumText('previous_anamnesis')->nullable();
            $table->mediumText('vegetative_anamnesis')->nullable();
            $table->mediumText('risk_anamnesis')->nullable();
            $table->mediumText('drug_anamnesis')->nullable();
            $table->mediumText('gender_based_anamnesis')->nullable();
            $table->mediumText('family_anamnesis')->nullable();
            $table->mediumText('social_anamnesis')->nullable();
            $table->mediumText('further_anamnesis')->nullable();
            $table->mediumText('suspected_diagnosis')->nullable();
            $table->timestamps();
        });

        Schema::table('anamnesis_questionaire', function ($table) {
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('anamnesis_questionaire');
    }
}
