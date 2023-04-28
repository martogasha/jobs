<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->mediumText('image');
            $table->mediumText('imageOne')->nullable();
            $table->mediumText('imageTwo')->nullable();
            $table->mediumText('imageThree')->nullable();
            $table->longText('product_title')->nullable();
            $table->integer('product_amount')->nullable();
            $table->longText('product_desc')->nullable();
            $table->integer('user_id')->nullable();
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
}
