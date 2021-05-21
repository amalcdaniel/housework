<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_models', function (Blueprint $table) {
            $table->id("id");
            $table->unsignedBigInteger('Customerid');
            $table->foreign('Customerid')->references('id')->on('signup_models')->onUpdate('cascade')->OnDelete('cascade');
            $table->string("Workername");
            $table->string("Feedback");
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
        Schema::dropIfExists('feedback_models');
    }
}
