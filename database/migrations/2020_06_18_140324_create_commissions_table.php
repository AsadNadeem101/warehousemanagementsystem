<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commissions', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('renter_id');
            $table->foreign('renter_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('tenant_rent_id');
            $table->foreign('tenant_rent_id')->references('id')->on('tenant_rents');

            $table->integer('amount');
            $table->boolean('paid')->default(0);
            $table->dateTime('paid_at')->nullable();

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
        Schema::dropIfExists('commissions');
    }
}
