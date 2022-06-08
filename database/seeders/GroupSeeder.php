<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Group::create(['name' => 'Mobile App 2201', 'instructor_id' => 1, 'course_id' => 1]);
        Group::create(['name' => 'Wordpress 2201', 'instructor_id' => 2, 'course_id' => 2]);
        Group::create(['name' => 'Web Dev 2201', 'instructor_id' => 3, 'course_id' => 3]);

        Group::create(['name' => 'Amazon VA 2201', 'instructor_id' => 4, 'course_id' => 4]);
        Group::create(['name' => 'Amazon WS 2201', 'instructor_id' => 4, 'course_id' => 5]);
        Group::create(['name' => 'Amazon PL 2201', 'instructor_id' => 4, 'course_id' => 6]);

        Group::create(['name' => 'Graphics 2201', 'instructor_id' => 5, 'course_id' => 7]);
        Group::create(['name' => 'GK Prep 2201', 'instructor_id' => 6, 'course_id' => 8]);
    }
}