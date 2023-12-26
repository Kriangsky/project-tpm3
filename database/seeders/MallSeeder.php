<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Malls::create([
            'Daerah' => 'Jakut',
            'Name' => 'Emporium',
            'Email' => 'tes',
            'Image' => 'tes',
            'CategoryId' => 1
        ]);
    }
}






