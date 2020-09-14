<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant_warehouses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('warehouse_id');
            $table->foreign('warehouse_id')->references('id')->on('warehouses');

            $table->unsignedBigInteger('warehouse_ad_id');
            $table->foreign('warehouse_ad_id')->references('id')->on('warehouse_ads');
            
            $table->unsignedBigInteger('renter_id');
            $table->foreign('renter_id')->references('id')->on('users');

            $table->unsignedBigInteger('tenant_id');
            $table->foreign('tenant_id')->references('id')->on('users');


            $table->date('start_date');

            $table->date('end_date');

            $table->integer('duration');

            $table->integer('rent');

            $table->boolean('status')->default(1);

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
        Schema::dropIfExists('tenant_warehouses');
    }
}
