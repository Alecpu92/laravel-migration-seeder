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

            $table ->string('agency')
            $table ->string('departure station', 36)
            $table ->string('arrival station', 36)
            $table ->integer('departure time')
            $table ->integer('arrival time')
            $table ->string('train code')
            $table ->integer('number carriages')
            $table ->boolean('in time')
            $table ->boolean('deleted')
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
