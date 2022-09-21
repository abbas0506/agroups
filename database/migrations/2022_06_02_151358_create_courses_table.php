<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->char('code', 10)->unique();
            $table->char('slug', 100)->unique();
            $table->string('name');
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('paid')->default(1);
            $table->char('level')->default('Medium');
            $table->unsignedTinyInteger('duration')->default(48); // weeks
            $table->string('icon')->nullable();
            $table->string('logo')->default("https://seeklogo.com/images/L/laravel-logo-41EC1D4C3F-seeklogo.com.png");
            $table->unsignedTinyInteger('index')->default(1);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
