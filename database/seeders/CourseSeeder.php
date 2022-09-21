<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
        Course::create(['category_id' => 1, 'logo' => '/images/course/mobile_app.png', 'name' => 'Mobile App Developemnt (Flutter)', 'duration' => '72', 'short_description' => 'course details', 'code' => 'MAD', 'slug' => 'mad']);
        Course::create(['category_id' => 1, 'logo' => '/images/course/web_development.png', 'name' => 'Full Stack Web Development', 'duration' => '72',  'short_description' => 'course details', 'code' => 'WDL', 'slug' => 'wdl']);
        Course::create(['category_id' => 1, 'logo' => '/images/course/wordpress.png', 'name' => 'Wordpress Web Development', 'duration' => '72', 'short_description' => 'course details', 'code' => 'WWD', 'slug' => 'wwd']);
        Course::create(['category_id' => 4, 'logo' => '/images/course/amazon.png', 'name' => 'Amazon Virtual Assistant', 'duration' => '56',  'short_description' => 'course details', 'code' => 'AVA', 'slug' => 'ava']);
        Course::create(['category_id' => 2, 'logo' => '/images/course/graphics.png', 'name' => 'Advance Graphic Designing', 'duration' => '72', 'short_description' => 'course details', 'code' => 'AGD', 'slug' => 'agd']);
        Course::create(['category_id' => 3, 'logo' => '/images/course/video_editing.jpg', 'name' => 'Video Editor', 'duration' => '72', 'short_description' => 'course details', 'code' => 'AVD', 'slug' => 'avd']);
        // Course::create(['category_id' => 2, 'logo' => '/images/course/graphics.png', 'name' => 'Basic Graphic Designing', 'duration' => '38', 'short_description' => 'course details', 'code' => 'BGD', 'slug' => 'bgd']);
        Course::create(['category_id' => 5, 'logo' => '/images/course/education.jpg', 'name' => 'Job Test Prepration', 'duration' => '72',  'short_description' => 'course details', 'code' => 'JTP', 'slug' => 'jtp']);

        $courses = Course::all();
        foreach ($courses as $course) {
            $course->slug = Str::slug($course->name);
            $course->save();
        }
    }
}
