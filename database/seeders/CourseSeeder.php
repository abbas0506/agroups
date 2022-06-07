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
        Course::create(['name' => 'Android Development']);
        Course::create(['name' => 'Web Designing']);
        Course::create(['name' => 'Web Development']);
        Course::create(['name' => 'Amazon Virtual Assistant']);
        Course::create(['name' => 'Graphics Designing']);
        Course::create(['name' => 'PPSC']);
    }
}