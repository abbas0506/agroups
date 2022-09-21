<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Instructor;
use App\Models\User;
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
        // Mobile App Development
        $group = new Group();
        $group->code = '0622';
        $group->name = 'June 22';
        $group->course_id = 1;
        $group->instructor_id = 1;
        $group->startdate = '2022-06-28';
        $group->status = 0;
        $group->fee = 45000;
        $group->save();

        $group = new Group();
        $group->code = '1022';
        $group->name = 'October 22';
        $group->course_id = 1;
        $group->instructor_id = 1;
        $group->startdate = '2022-10-06';
        $group->status = 1;
        $group->fee = 45000;
        $group->save();

        // Web App Development
        $group = new Group();
        $group->code = '0622';
        $group->name = 'June 22';
        $group->course_id = 2;
        $group->instructor_id = 2;
        $group->startdate = '2022-06-28';
        $group->status = 0;
        $group->fee = 45000;
        $group->save();

        $group = new Group();
        $group->code = '1022';
        $group->name = 'October 22';
        $group->course_id = 2;
        $group->instructor_id = 2;
        $group->startdate = '2022-10-03';
        $group->status = 1;
        $group->fee = 45000;
        $group->save();

        // Wordpress Development
        $group = new Group();
        $group->code = '0622';
        $group->name = 'June 22';
        $group->course_id = 3;
        $group->instructor_id = 3;
        $group->startdate = '2022-06-28';
        $group->status = 0;
        $group->fee = 45000;
        $group->save();

        $group = new Group();
        $group->code = '1022';
        $group->name = 'October 22';
        $group->course_id = 3;
        $group->instructor_id = 3;
        $group->startdate = '2022-10-03';
        $group->status = 1;
        $group->fee = 45000;
        $group->save();

        // Amazon 
        $group = new Group();
        $group->code = '0622';
        $group->name = 'June 22';
        $group->course_id = 4;
        $group->instructor_id = 7;
        $group->startdate = '2022-06-28';
        $group->status = 0;
        $group->fee = 25000;
        $group->save();

        $group = new Group();
        $group->code = '0822';
        $group->name = 'Aug 22';
        $group->course_id = 4;
        $group->instructor_id = 7;
        $group->startdate = '2022-08-20';
        $group->status = 0;
        $group->fee = 25000;
        $group->save();

        $group = new Group();
        $group->code = '1022';
        $group->name = 'October 22';
        $group->course_id = 4;
        $group->instructor_id = 7;
        $group->startdate = '2022-10-03';
        $group->status = 1;
        $group->fee = 25000;
        $group->save();

        // Graphic Desining 
        $group = new Group();
        $group->code = '0622';
        $group->name = 'June 22';
        $group->course_id = 5;
        $group->instructor_id = 4;
        $group->startdate = '2022-06-28';
        $group->status = 0;
        $group->fee = 25000;
        $group->save();

        $group = new Group();
        $group->code = '1022';
        $group->name = 'October 22';
        $group->course_id = 5;
        $group->instructor_id = 4;
        $group->startdate = '2022-10-03';
        $group->status = 1;
        $group->fee = 25000;
        $group->save();

        // Test Prepration 
        $group = new Group();
        $group->code = '0622';
        $group->name = 'June 22';
        $group->course_id = 7;
        $group->instructor_id = 5;
        $group->startdate = '2022-06-28';
        $group->status = 0;
        $group->fee = 4000;
        $group->save();

        $group = new Group();
        $group->code = '1022';
        $group->name = 'October 22';
        $group->course_id = 7;
        $group->instructor_id = 5;
        $group->startdate = '2022-10-03';
        $group->status = 1;
        $group->fee = 4000;
        $group->save();

        // Video Editing 
        $group = new Group();
        $group->code = '1022';
        $group->name = 'October 22';
        $group->course_id = 6;
        $group->instructor_id = 4;
        $group->startdate = '2022-10-03';
        $group->status = 1;
        $group->fee = 30000;
        $group->save();

        // // Basic Graphic  
        // $group = new Group();
        // $group->code = '1022';
        // $group->name = 'October 22';
        // $group->course_id = 7;
        // $group->instructor_id = 6;
        // $group->startdate = '2022-10-03';
        // $group->status = 1;
        // $group->fee = 15000;
        // $group->save();
    }
}
