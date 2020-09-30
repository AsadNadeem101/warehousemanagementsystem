<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_ads', function (Blueprint $table) {
            $table->id();
            $table->string('title');

            $table->unsignedBigInteger('warehouse_id');
            $table->foreign('warehouse_id')->references('id')->on('warehouses')->onDelete('cascade');
            $table->unsignedBigInteger('renter_id');
            $table->foreign('renter_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('description');

            $table->integer('marla');

            $table->integer('room');

            $table->integer('duration');

            $table->integer('rent');

            $table->enum('status',['pending', 'inactive','active'])->default('pending');

            $table->enum('category',['normal','cooling']);

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
        Schema::dropIfExists('warehouse_ads');
    }
}
