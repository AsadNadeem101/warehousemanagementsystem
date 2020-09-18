<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('country')->default('Pakistan');
            $table->string('city');
            $table->string('address');
            $table->integer('marla');
            $table->integer('room');
            $table->unsignedBigInteger('renter_id');
            $table->foreign('renter_id')->references('id')->on('users')->onDelete('cascade');
               $table->enum('status',['inactive', 'active',])->default('inactive');
            
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
        Schema::dropIfExists('warehouses');
    }
}
