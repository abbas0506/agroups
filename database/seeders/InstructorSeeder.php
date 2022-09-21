<?php

namespace Database\Seeders;

use App\Models\Instructor;
use App\Models\User;
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
        $user1 = new User();
        $user1->name = 'Azeem Ullah';
        $user1->phone = '03004103160';
        $user1->email = 'mazeemrehan@gmail.com';
        $user1->role_id = 4;
        $user1->photo = "/images/instructors/azeem.png";
        $user1->password = bcrypt('03004103160');
        $user1->save();

        $instructor = new Instructor();
        $instructor->user_id = $user1->id;
        $instructor->address = "Rasheed u din Colony, Depalpur";
        $instructor->specialization = "Mobile App Developer";
        $instructor->experience = "8+ Years";
        $instructor->gender = 1;
        $instructor->save();

        // Abbas sb
        $user2 = new User();
        $user2->name = 'Muhammad Abbas';
        $user2->phone = '03000373004';
        $user2->email = 'mabbas@gmail.com';
        $user2->role_id = 4;
        $user2->photo = "/images/instructors/abbas.png";
        $user2->password = bcrypt('03000373004');
        $user2->save();

        $instructor = new Instructor();
        $instructor->user_id = $user2->id;
        $instructor->address = "Exchange Road";
        $instructor->specialization = "Web Developer";
        $instructor->experience = "8+ Years";
        $instructor->gender = 1;
        $instructor->save();


        // Zeshan sb
        $user3 = new User();
        $user3->name = 'Zeshan Talib';
        $user3->phone = '03137330147';
        $user3->email = 'zeshantalib786@gmail.com';
        $user3->role_id = 4;
        $user3->photo = "/images/instructors/zeshan.png";
        $user3->password = bcrypt('03137330147');
        $user3->save();

        $instructor = new Instructor();
        $instructor->user_id = $user3->id;
        $instructor->address = "Sharif wala";
        $instructor->specialization = "Wordpress Developer";
        $instructor->experience = "4+ Years";
        $instructor->gender = 1;
        $instructor->save();

        // Adnan sb
        $user4 = new User();
        $user4->name = 'Muhammad Adnan';
        $user4->phone = '03477876648';
        $user4->email = 'adnan@gmail.com';
        $user4->role_id = 4;
        $user4->photo = "/images/instructors/adnan.png";
        $user4->password = bcrypt('03477876648');
        $user4->save();

        $instructor = new Instructor();
        $instructor->user_id = $user4->id;
        $instructor->address = "49/D";
        $instructor->specialization = "Graphic Designer";
        $instructor->experience = "8+ Years";
        $instructor->gender = 1;
        $instructor->save();

        // Naveed sb
        $user5 = new User();
        $user5->name = 'Muhammad Naveed';
        $user5->phone = '03224969700';
        $user5->email = 'muhammadnaveed@gmail.com';
        $user5->role_id = 4;
        $user5->photo = "/images/instructors/naveed.png";
        $user5->password = bcrypt('03224969700');
        $user5->save();

        $instructor = new Instructor();
        $instructor->user_id = $user5->id;
        $instructor->address = "Sakhi Syden Colony, Depalpur";
        $instructor->specialization = "Commision Job Expert";
        $instructor->experience = "4+ Years";
        $instructor->gender = 1;
        $instructor->save();


        // Naveed sb
        $user6 = new User();
        $user6->name = 'Muhammad Sohail';
        $user6->phone = '03037042233';
        $user6->email = 'sohailgraphic@gmail.com';
        $user6->role_id = 4;
        $user6->photo = "/images/instructors/sohail.png";
        $user6->password = bcrypt('03037042233');
        $user6->save();

        $instructor = new Instructor();
        $instructor->user_id = $user6->id;
        $instructor->address = "Chiplipur";
        $instructor->specialization = "Graphic Designer";
        $instructor->experience = "4+ Years";
        $instructor->gender = 1;
        $instructor->save();

        // Rizzwan sb
        $user6 = new User();
        $user6->name = 'Muhammad Rizwan';
        $user6->phone = '03046806440';
        $user6->email = 'rizwanamazon@gmail.com';
        $user6->role_id = 4;
        $user6->photo = "/images/instructors/rizwan.png";
        $user6->password = bcrypt('03046806440');
        $user6->save();

        $instructor = new Instructor();
        $instructor->user_id = $user6->id;
        $instructor->address = "Exchange Road, Depalpur";
        $instructor->specialization = "Amazon Expert";
        $instructor->experience = "6+ Years";
        $instructor->gender = 1;
        $instructor->save();
    }
}
