<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisasterReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disaster_reports', function (Blueprint $table) {
            $table->id();
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('disasterId')->references('id')->on('disasters');
            $table->string('image')->nullable();
            $table->point('location');
            $table->longText('details');
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
        Schema::dropIfExists('disaster_reports');
    }
}
