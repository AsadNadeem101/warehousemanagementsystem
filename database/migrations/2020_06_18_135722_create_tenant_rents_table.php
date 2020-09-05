<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant_rents', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tenant_warehouse_id');
            $table->foreign('tenant_warehouse_id')->references('id')->on('tenant_warehouses');

            $table->string('month');
            $table->integer('rent');
            $table->boolean('paid');
            $table->unsignedBigInteger('account_number')->default(0);
            $table->string('system_verification')->default(0);
            $table->date('paid_at')->nullable();
            
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
        Schema::dropIfExists('tenant_rents');
    }
}
