<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('course_id');
            $table->boolean('status')->default(1);  //individual status of student: left or on roll
            $table->string('remarks')->nullable();  //special note about student status

            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('registrations');
    }
}