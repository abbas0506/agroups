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
            $table->unsignedBigInteger('group_id');
            $table->unsignedMediumInteger('package')->default(0); // Managment can modified 
            $table->boolean('status')->default(1);  //individual status of student: left or on roll
            $table->tinyInteger('class_mode')->default(0); // 1 Physical , 2 Online
            $table->string('remarks')->nullable();  //special note about student status
            $table->foreign('student_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('group_id')
                ->references('id')
                ->on('groups')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
            $table->unique(['student_id', 'group_id']);
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
