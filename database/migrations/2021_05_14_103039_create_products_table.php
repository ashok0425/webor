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
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('short_desc')->nullable();
            $table->text('long_desc')->nullable();


            $table->integer('category_id');
            $table->integer('subcategory_id')->nullable();
            
            $table->integer('price');
            $table->integer('vendor_id')->nullable();
            $table->integer('featured')->nullable();
            $table->integer('top_rated')->nullable();
            $table->integer('bestseller')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('sku')->nullable();
            $table->integer('status')->default(1);
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
