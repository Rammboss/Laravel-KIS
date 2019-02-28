<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('username')->unique();
            $table->string('title');
            $table->string('first_name');
            $table->string('name');
            $table->string('phone');
            $table->string('mobile');
            $table->string('mail')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->char('gender');
            $table->integer('ward_id')->unsigned();
            $table->integer('specification_id')->unsigned();
            $table->integer('role_id')->unsigned();

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users', function ($table){
            $table->foreign('ward_id')->references('id')->on('wards')->onDelete('cascade');
            $table->foreign('specification_id')->references('id')->on('specifications')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');


        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
