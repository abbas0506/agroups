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
        Course::create(['name' => 'Mobile Apps', 'body' => 'course details']);
        Course::create(['name' => 'Wordpress', 'body' => 'course details']);
        Course::create(['name' => 'Web Development',  'body' => 'course details']);
        Course::create(['name' => 'Amazon Virtual Assistant',  'body' => 'course details']);
        Course::create(['name' => 'Amazon FBA Wholesale', 'body' => 'course details']);
        Course::create(['name' => 'Amazon FBA Private Label', 'body' => 'course details']);
        Course::create(['name' => 'Graphics', 'body' => 'course details']);
        Course::create(['name' => 'Job Test Prepration',  'body' => 'course details']);
    }
}
