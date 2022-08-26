<?php

namespace Database\Seeders;

use App\Models\Qualification;
use Illuminate\Database\Seeder;

class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Qualification::insert([
            ['title' => 'Matric'],
            ['title' => 'Fsc(Medical)'],
            ['title' => 'Fsc(Engineering)'],
            ['title' => 'ICS'],
            ['title' => 'D.Com'],
            ['title' => 'I.Com'],
            ['title' => 'DAE'],
            ['title' => 'B.A'],
            ['title' => 'BSC'],
            ['title' => 'BSCS'],
            ['title' => 'BSIT'],
            ['title' => 'BS Botany'],
            ['title' => 'BS Chemistry'],
            ['title' => 'BS Physics'],
            ['title' => 'Msc'],
            ['title' => 'M.Phill'],
        ]);
    }
}
