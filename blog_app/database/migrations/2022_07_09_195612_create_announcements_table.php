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
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->references('id')->on('categories');
            $table->integer('subcategory_id');
            $table->integer('salary');
            $table->string('company_name');
            $table->string('age_range');
            $table->text('education');
            $table->integer('phone');
            $table->string('email');
            $table->string('contact_person');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->text('requirement');
            $table->text('description');
            $table->string('slug');
            $table->string('title',50);
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
        Schema::dropIfExists('announcements');
    }
};
