<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->char('code', 10)->unique();
            $table->string('title');
            $table->longText('body');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('instructor_id');
            $table->date('startdate')->nullable();
            $table->date('enddate')->nullable();
            $table->boolean('status')->default(0); // 0 for inactive 1 = active
            $table->unsignedInteger('fee')->default(6000);
            $table->unsignedInteger('discount')->default(0);
            $table->unsignedTinyInteger('duration');
            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('instructor_id')
                ->references('id')
                ->on('instructors')
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
        Schema::dropIfExists('groups');
    }
}
