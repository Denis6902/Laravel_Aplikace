<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitor', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger("brand_id")->index()->nullable();
            $table->foreign('brand_id')->references('id')->on('brand');
            $table->integer("size");
            $table->string("resolution");
            $table->integer("refresh_rate");
            $table->string("panel_type");
            $table->integer("rating");
            $table->integer("price");
            $table->text("info");
            $table->unsignedBigInteger("illustration_image_id")->index()->nullable();
            $table->foreign('illustration_image_id')->references('id')->on('illustrationimage');
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
        Schema::dropIfExists('monitor');
    }
};
