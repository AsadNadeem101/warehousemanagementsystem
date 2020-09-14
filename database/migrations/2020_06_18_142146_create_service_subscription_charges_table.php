<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceSubscriptionChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_subscription_charges', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('renter_id');
            $table->foreign('renter_id')->references('id')->on('users');

            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');            

            $table->string("month");
            $table->enum('payment_status', ['pending', 'paid', 'nopaid'])->default('pending');
            $table->unsignedBigInteger('account_number')->default(0);
            $table->enum('system_verification',['pending', 'verified',])->default('pending');
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
        Schema::dropIfExists('service_subscription_charges');
    }
}
