<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanSubscriptionUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_subscription_users', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('renter_id');
            $table->foreign('renter_id')->references('id')->on('users');

            $table->unsignedBigInteger('warehouse_id');
            $table->foreign('warehouse_id')->references('id')->on('warehouses');

            $table->unsignedBigInteger('plan_id');
            $table->foreign('plan_id')->references('id')->on('plans');

            $table->date('start_date');
            $table->date('end_date');

            $table->integer('paid')->default(0);
            
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
        Schema::dropIfExists('plan_subscription_users');
    }
}
