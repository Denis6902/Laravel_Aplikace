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
        Schema::create('pccase', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger("brand_id")->index()->nullable();
            $table->foreign('brand_id')->references('id')->on('brand');
            $table->string("type");
            $table->string("color");
            $table->integer("internal_5_25_bays");
            $table->integer("external_5_25_bays");
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
        Schema::dropIfExists('pccase');
    }
};
