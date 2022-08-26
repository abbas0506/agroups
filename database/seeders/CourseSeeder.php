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
        Course::create(['title' => 'Mobile App Developemnt (Flutter)', 'body' => 'course details', 'code' => 'MAD']);
        Course::create(['title' => 'Wordpress Web Development', 'body' => 'course details', 'code' => 'WWD']);
        Course::create(['title' => 'Web Development (Laravel)',  'body' => 'course details', 'code' => 'WDL']);
        Course::create(['title' => 'Amazon Virtual Assistant',  'body' => 'course details', 'code' => 'AVA']);
        Course::create(['title' => 'Amazon FBA Wholesale', 'body' => 'course details', 'code' => 'AWS']);
        Course::create(['title' => 'Amazon FBA Private Label', 'body' => 'course details', 'code' => 'APL']);
        Course::create(['title' => 'Graphic Designing', 'body' => 'course details', 'code' => 'GD']);
        Course::create(['title' => 'Job Test Prepration',  'body' => 'course details', 'code' => 'JTP']);
    }
}
