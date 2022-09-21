<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mobile App Development
        Category::insert([
            ['name' => 'Programming', 'slug' => Str::slug('Programming'), 'icon' => 'icon-11'],
            ['name' => 'Graphic & Designing', 'slug' => Str::slug('Graphic & Designing'), 'icon' => 'icon-42'],
            ['name' => 'Video & Animation', 'slug' => Str::slug('Video & Animation'), 'icon' => 'icon-16'],
            ['name' => 'Digital Markeeting', 'slug' => Str::slug('Digital Markeeting'), 'icon' => 'icon-14'],
            ['name' => 'Job Preprations', 'slug' => Str::slug('Job Preprations'), 'icon' => 'icon-50'],
        ]);
    }
}
