<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductcolorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productcolors', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');

            $table->string('color')->nullable();
            $table->string('image')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('sku')->nullable();

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
        Schema::dropIfExists('productcolors');
    }
}
