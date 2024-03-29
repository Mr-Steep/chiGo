<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->decimal('total_amount', 10, 2);
            $table->unsignedBigInteger('status_id')->default(1); // Default status is 'unconfirmed'
            $table->unsignedBigInteger('coupon_id')->nullable();
            $table->unsignedBigInteger('shipping_id');
            $table->unsignedBigInteger('address_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('order_statuses');
            $table->foreign('coupon_id')->references('id')->on('coupons')->onDelete('set null');
            $table->foreign('shipping_id')->references('id')->on('shippings')->onDelete('cascade');
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
