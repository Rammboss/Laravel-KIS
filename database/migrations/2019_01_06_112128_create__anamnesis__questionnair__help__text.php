<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnamnesisQuestionnairHelpText extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Anamnesis_Questionnair_Help_Text', function (Blueprint $table) {
            $table->increments('id'); //PK
            $table->text('recent_anamnesis');
            $table->text('previous_anamnesis');
            $table->text('vegetative_anamnesis');
            $table->text('risk_anamnesis');
            $table->text('drug_anamnesis');
            $table->text('gender_anamnesis');
            $table->text('family_anamnesis');
            $table->text('social_anamnesis');
            $table->text('further_anamnesis');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Anamnesis_Questionnair_Help_Text');
    }
}
