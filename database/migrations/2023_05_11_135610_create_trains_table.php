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

            $table->string('azienda', 100);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->smallInteger('train_code');
            $table->tinyInteger('carriages_number');
            $table->string('in_time', 50)->nullable();
            $table->boolean('is_deleted');

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
