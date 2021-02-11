<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilateralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bilaterals', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('requesting_country');

            $table->string('requested_country');

            $table->string('status')->nullable();

            $table->string('declination',500)->nullable();

            $table->string('reason_requesting',500)->nullable();

            $table->string('reason_requested',500)->nullable();

            $table->string('room')->nullable();

            $table->time('time')->nullable();

            $table->date('schedule')->nullable();

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
        Schema::dropIfExists('bilaterals');
    }
}
