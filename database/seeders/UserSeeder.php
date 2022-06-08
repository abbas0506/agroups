<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Azeem Rehan',
            'phone' => '030041003160',
            'email' => 'sample1@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'Zeeshan Talib',
            'phone' => '03137330147',
            'email' => 'sample2@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'Muhammad Abbas',
            'phone' => '03000373004',
            'email' => 'abbas.sscs@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Muhammad Rizwan',
            'phone' => '03001234567',
            'email' => 'sample4@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'Muhammad Sohail',
            'phone' => '03001234567',
            'email' => 'sample5@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Muhammad Naveed',
            'phone' => '03224969700',
            'email' => 'sample3@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}