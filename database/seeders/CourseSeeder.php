<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Course::create(['name' => 'Mobile Apps']);
        Course::create(['name' => 'Wordpress']);
        Course::create(['name' => 'Web Development']);
        Course::create(['name' => 'Amazon']);
        Course::create(['name' => 'Graphics']);
        Course::create(['name' => 'GK Preparation']);
    }
}