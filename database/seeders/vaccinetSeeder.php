<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vaccinetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vaccine')->insert([
            [
                'vaccine' => 'AstraZeneca'
            ],
            [
                'vaccine' => 'Sinovac'
            ],
            [
                'vaccine' => 'Pfizer'
            ],
            [
                'vaccine' => 'Moderna'
            ],
            [
                'vaccine' => 'Johnson & Johnson'
            ],
            [
                'vaccine' => 'Covaxin'
            ],
            [
                'vaccine' => 'Sputnik V'
            ],
            [
                'vaccine' => 'Sinopharm'
            ]
        ]);
    }
}
