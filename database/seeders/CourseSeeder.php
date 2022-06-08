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
        Course::create(['name' => 'Mobile Apps', 'fee' => 45000, 'duration' => 3]);
        Course::create(['name' => 'Wordpress', 'fee' => 30000, 'duration' => 3]);
        Course::create(['name' => 'Web Development', 'fee' => 45000, 'duration' => 3]);
        Course::create(['name' => 'Amazon Virtual Assistant', 'fee' => 45000, 'duration' => 3]);
        Course::create(['name' => 'Amazon FBA Wholesale', 'fee' => 45000, 'duration' => 3]);
        Course::create(['name' => 'Amazon FBA Private Label', 'fee' => 45000, 'duration' => 3]);
        Course::create(['name' => 'Graphics', 'fee' => 20000, 'duration' => 2]);
        Course::create(['name' => 'GK Preparation', 'fee' => 45000, 'duration' => 3]);
    }
}