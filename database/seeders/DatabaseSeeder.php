<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            InstructorSeeder::class,
            CategorySeeder::class,
            CourseSeeder::class,
            GroupSeeder::class,
            QualificationSeeder::class,
        ]);
        // \App\Models\User::factory(2)->create();
        // \App\Models\Student::factory(20)->create();
        // \App\Models\Instructor::factory(10)->create();
        // \App\Models\Group::factory(10)->create();
        // \App\Models\Registration::factory(50)->create();
    }
}
