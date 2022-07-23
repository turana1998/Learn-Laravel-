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
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->cascadeOnUpdate();
            $table->unsignedBigInteger('sub_category_id');
            $table->foreign('sub_category_id')
                ->references('id')
                ->on('sub_categories')
                ->cascadeOnUpdate();
            $table->integer('salary');
            $table->string('company_name');
            $table->string('company_name_en');
            $table->string('company_name_ru');
            $table->string('age_range');
            $table->text('education');
            $table->text('education_en');
            $table->text('education_ru');
            $table->integer('phone');
            $table->string('email');
            $table->string('contact_person');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->text('requirement');
            $table->text('description');
            $table->text('description_en');
            $table->text('description_ru');
            $table->string('slug');
            $table->string('title',50);
            $table->string('title_en',50);
            $table->string('title_ru',50);
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
