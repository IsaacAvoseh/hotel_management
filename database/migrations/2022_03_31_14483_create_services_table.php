<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->boolean('air_conditioner')->nullable()->default(false);
            $table->boolean('drinks')->nullable()->default(false);
            $table->boolean('restaurant')->nullable()->default(false);
            $table->boolean('cable_tv')->nullable()->default(false);
            $table->boolean('unlimited_wifi')->nullable()->default(false);
            $table->boolean('hour_front_desk')->nullable()->default(true);
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
        Schema::dropIfExists('services');
    }
}
