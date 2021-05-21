<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkerModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_models', function (Blueprint $table) {
            $table->id('id');
            $table->string("Fname");
            $table->string("Lname");
            $table->string("Gender");
            $table->string("Hno");
            $table->string("Street");
            $table->string("City");
            $table->string("Pincode");
            $table->string("Email") ->unique();
            $table->string("Mob") ->unique();
            $table->string("Idproof");
            $table->string("Idproofno");
            $table->string("Wtype");
            $table->unsignedBigInteger('Categoryid');
            $table->foreign('Categoryid')->references('id')->on('category_models')->onUpdate('cascade')->OnDelete('cascade');
            $table->unsignedBigInteger('Locationid');
            $table->foreign('Locationid')->references('id')->on('location_models')->onUpdate('cascade')->OnDelete('cascade');
            $table->string("Filepath");
            $table->string("Description")->nullable();
            $table->string("Status")->default("Active");
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
        Schema::dropIfExists('worker_models');
    }
}
