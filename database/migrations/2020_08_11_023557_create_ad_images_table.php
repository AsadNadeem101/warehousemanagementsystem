<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('warehouse_ad_id');
            $table->foreign('warehouse_ad_id')->references('id')->on('warehouse_ads')->onDelete('cascade');

            $table->string('path');

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
        Schema::dropIfExists('ad_images');
    }
}
