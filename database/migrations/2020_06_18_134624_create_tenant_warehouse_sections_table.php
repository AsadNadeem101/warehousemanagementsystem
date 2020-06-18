<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantWarehouseSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant_warehouse_sections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('room');
            $table->integer('marla');

            $table->unsignedBigInteger('tenant_warehouse_id');
            $table->foreign('tenant_warehouse_id')->references('id')->on('tenant_warehouses');
            
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
        Schema::dropIfExists('tenant_warehouse_sections');
    }
}
