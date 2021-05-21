<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_models', function (Blueprint $table) {
            $table->id("id");
            $table->string("Date");
            $table->string("Time");
            $table->string("Status");
            $table->unsignedBigInteger('Customerid');
            $table->foreign('Customerid')->references('id')->on('signup_models')->onUpdate('cascade')->OnDelete('cascade');
            $table->unsignedBigInteger('Workerid');
            $table->foreign('Workerid')->references('id')->on('worker_models')->onUpdate('cascade')->OnDelete('cascade');
            $table->unsignedBigInteger('Subcategoryid');
            $table->foreign('Subcategoryid')->references('id')->on('subcategory_models')->onUpdate('cascade')->OnDelete('cascade');
            $table->unsignedBigInteger('Categoryid');
            $table->foreign('Categoryid')->references('id')->on('category_models')->onUpdate('cascade')->OnDelete('cascade');
            $table->unsignedBigInteger('Locationid');
            $table->foreign('Locationid')->references('id')->on('location_models')->onUpdate('cascade')->OnDelete('cascade');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_models');
    }
}
