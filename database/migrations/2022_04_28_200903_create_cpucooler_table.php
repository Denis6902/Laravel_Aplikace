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
        Schema::create('cpucooler', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("fan_rpm");
            $table->string("noise_level");
            $table->string("color");
            $table->integer("radiator_size");
            $table->integer("height");
            $table->integer("rating");
            $table->integer("price");
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
        Schema::dropIfExists('cpucooler');
    }
};
