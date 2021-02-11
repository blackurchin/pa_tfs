<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            ///basic profile//////////
            $table->string('rankcode');
            $table->string('rank_abbrev');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('gender');
            $table->date('birthdate');
            $table->string('email')->unique();
            $table->string('card_photo')->unique();
            $table->string('official_photo')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_active')->default(0);
            $table->string('assignment_duty_position');
            //////language///////
            $table->string('language_1');
            $table->string('language_2');
            $table->string('language_3');
            $table->string('language_4');
            //passport details///////
            $table->string('passport_nr');
            $table->date('date_of_issue');
            $table->date('date_of_expiry');
            $table->string('nationality');
            $table->string('mobile_nr');
            $table->string('tel_nr');
            ///address//////
            $table->string('street_1');
            $table->string('street_2');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('zip_postal_code');
            ///////arrival//////
            $table->string('arrival');
            $table->date('arrival_date');
            $table->dateTime('arrival_time');
            $table->string('arrival_airport');
            //departure///////
            $table->string('departure');
            $table->date('departure_date');
            $table->dateTime('departure_time');
            $table->string('departure_airport');
            ///////events///
            $table->string('event');
            ///////accomodation info///
            $table->string('accommodation');
            ////Others///
            ///////Dietary info///
            $table->string('dietary_restriction');
            ///////Medical///
            $table->string('medical_condition');
            ///////Interpretation///
            $table->string('required_interpretation');
            $table->string('interpreter_language');

            $table->rememberToken();
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
        Schema::dropIfExists('profiles');
    }
}
