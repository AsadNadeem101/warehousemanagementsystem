<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_bids', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('warehouse_ad_id');
            $table->foreign('warehouse_ad_id')->references('id')->on('warehouse_ads');

            $table->unsignedBigInteger('renter_id');
            $table->foreign('renter_id')->references('id')->on('users');

            $table->unsignedBigInteger('tenant_id');
            $table->foreign('tenant_id')->references('id')->on('users');

            $table->unsignedBigInteger('bid_amount');

            $table->enum('status',['pending','approved','rejected','withdrawn']);

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
        Schema::dropIfExists('warehouse_bids');
    }
}
