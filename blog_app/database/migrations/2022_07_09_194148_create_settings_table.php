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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->string('title_en',50);
            $table->string('title_ru',50);
            $table->string('description',150);
            $table->string('description_en',50);
            $table->string('description_ru',50);
            $table->string('keywords',50);
            $table->string('logo');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('linkedin');
            $table->integer('phone');
            $table->string('location');
            $table->string('location_en',50);
            $table->string('location_ru',50);
            $table->string('email');
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
        Schema::dropIfExists('settings');
    }
};
