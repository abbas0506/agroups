<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('registration_id');
            $table->unsignedTinyInteger('voucher_num')->default(1);
            $table->string('description')->nullable();
            $table->unsignedMediumInteger('fee');
            $table->unsignedMediumInteger('discount')->default(0);
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('registration_id')->references('id')->on('registrations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vouchers');
    }
}
