<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('platform');
            $table->string('order_type');
            $table->double('delivery_charges');
            $table->double('discount');
            $table->timestamp('delivery_date')->useCurrent();
            $table->double('total');
            $table->double('grand_total');
            $table->unsignedInteger('address_id');
            $table->foreign('address_id')->references('id')->on('user_addresses')->onDelete('cascade');
            $table->unsignedInteger('coupon_id');
            $table->foreign('coupon_id')->references('id')->on('coupons')->onDelete('cascade');
            $table->unsignedInteger('transaction_id');
            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
            $table->timestamp('order_date');
            $table->string('user_comments')->nullable();
            $table->tinyInteger('is_refunded');
            $table->double('refund_amount');
            $table->double('new_total')->nullable();
            $table->double('new_grand_total')->nullable();
            $table->double('new_delivery_charges')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
}
