<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('order_code', 100)->unique();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('shop_id')->references('id')->on('shops');
            $table->foreignId('Product_id')->references('id')->on('products');
            $table->float('sub_total');
            $table->float('tax');
            $table->float('shipment_fees');
            $table->float('total_amount');
            $table->enum('order_status', ['delivered', 'pending', 'confirmed', 'canceled'])->default('pending');
            $table->enum('payment_status', ['Paid', 'Unpaid'])->default('Unpaid');
            $table->string('payment_method', 100);
            $table->integer('item_quantity');
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
        Schema::dropIfExists('orders');
    }
};
