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
        Schema::create('brand', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name');
            $table->timestamps();
        });

        Schema::create('brandmodel', function (Blueprint $table) {
            $table->id();
            $table->integer('brand_id');
            $table->string('model_name');
            $table->integer('price_list');
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
        Schema::dropIfExists('brand');
        Schema::dropIfExists('model');
    }
};
