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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_id')->nullable()->references('id')->on('shops')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('category_id')->references('id')->on('categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('product_title', 255);
            $table->string('product_sku', 255);
            $table->string('product_image', 255);
            $table->integer('qty');
            $table->double('price',8,2);
            $table->double('discount',8,2);
            $table->string('seo_keywords')->nullable();
            $table->string('identifier', 20);
            $table->boolean("approved")->default(0);
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
        Schema::dropIfExists('products');
    }
};
