<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApponitmentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apponitment_details', function (Blueprint $table) {
            $table->id();
            $table->integer('appointment_id');
            $table->string('device')->nullable();
            $table->string('brand')->nullable();
            $table->string('modal')->nullable();
            $table->string('part')->nullable();
            $table->float('price');
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
        Schema::dropIfExists('apponitment_details');
    }
}
