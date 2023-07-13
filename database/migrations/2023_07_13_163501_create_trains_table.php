<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table ->string('agency');
            $table ->string('departure_station', 36);
            $table ->string('arrival_station', 36);
            $table ->integer('departure_time');
            $table ->integer('arrival_time');
            $table ->string('train_code');
            $table ->integer('number_carriages');
            $table ->boolean('in_time');
            $table ->boolean('deleted');

            
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
        Schema::dropIfExists('trains');
    }
};
