<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderedProductVariants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordered_product_variants', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('ordered_products_id');
            $table->foreign('ordered_products_id')->references('id')->on('ordered_products')->onDelete('cascade');
            $table->unsignedInteger('variant_value_id');
            $table->foreign('variant_value_id')->references('id')->on('product_variant_values')->onDelete('cascade');
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
        Schema::table('ordered_product_variants', function (Blueprint $table) {
            //
        });
    }
}
