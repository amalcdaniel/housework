<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoryModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategory_models', function (Blueprint $table) {
            $table->id("id");
            $table->unsignedBigInteger('Categoryid');
            $table->foreign('Categoryid')->references('id')->on('category_models')->onUpdate('cascade')->OnDelete('cascade');
            $table->string("Subcategory");
            $table->string("Payment");
           
            
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
        Schema::dropIfExists('subcategory_models');
    }
}
