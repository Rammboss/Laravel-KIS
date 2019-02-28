<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id'); //PK
            $table->longText('first_name');
            $table->longText('name');
            $table->integer('clinic_id');
            $table->char('gender');
            $table->date('date_of_birth');
            $table->longText('address');
            $table->longText('phone');
            $table->longText('mobile');
            $table->longText('mail');
            $table->integer('room');
            $table->longText('comment')->nullable();
            $table->string('health_insurance_number')->unique();
            $table->integer('ward_id')->unsigned(); //FK
            $table->integer('general_practitioner_id')->unsigned(); //FK
            $table->integer('health_insurance_id')->unsigned(); //FK
            $table->date('release_date')->nullable();
            $table->timestamps();
        });

        Schema::table('patients', function ($table){
            $table->foreign('ward_id')->references('id')->on('wards')->onDelete('cascade');
            $table->foreign('general_practitioner_id')->references('id')->on('general__practitioners')->onDelete('cascade');
            $table->foreign('health_insurance_id')->references('id')->on('health__insurances')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
