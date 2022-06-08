<?php

namespace Database\Seeders;

use App\Models\Instructor;
use Illuminate\Database\Seeder;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Instructor::create(['user_id' => 1, 'gender' => 'm', 'address' => 'Depalpur']);
        Instructor::create(['user_id' => 2, 'gender' => 'm', 'address' => 'Depalpur']);
        Instructor::create(['user_id' => 3, 'gender' => 'm', 'address' => 'Depalpur']);
        Instructor::create(['user_id' => 4, 'gender' => 'm', 'address' => 'Depalpur']);
        Instructor::create(['user_id' => 5, 'gender' => 'm', 'address' => 'Depalpur']);
        Instructor::create(['user_id' => 6, 'gender' => 'm', 'address' => 'Depalpur']);
    }
}