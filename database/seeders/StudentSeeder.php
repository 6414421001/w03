<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student')->insert([
            [
                'sid' => 6414421001,
                'fname' => 'สม',
                'lname' => 'นามสกุล',
                'std_prg_id' => 1, 
            ],
            [
                'sid' => 6414421002,
                'fname' => 'หญิง',
                'lname' => 'นามสกุล',
                'std_prg_id' => 2, 
            ],
            [
                'sid' => 6414421003,
                'fname' => 'หนุ่ม',
                'lname' => 'นามสกุล',
                'std_prg_id' => 3, 
            ],
            [
                'sid' => 6414421004,
                'fname' => 'สาว',
                'lname' => 'นามสกุล',
                'std_prg_id' => 4,
            ],
            [
                'sid' => 6414421005,
                'fname' => 'ชายหนุ่ม',
                'lname' => 'นามสกุล',
                'std_prg_id' => 5, 
            ],
            [
                'sid' => 6414421006,
                'fname' => 'หญิงสาว',
                'lname' => 'นามสกุล',
                'std_prg_id' => 6, 
            ],
            [
                'sid' => 6414421007,
                'fname' => 'ชายหนุ่ม',
                'lname' => 'นามสกุล',
                'std_prg_id' => 7, 
            ],
            [
                'sid' => 6414421008,
                'fname' => 'หญิงสาว',
                'lname' => 'นามสกุล',
                'std_prg_id' => 8,
            ],
            [
                'sid' => 6414421009,
                'fname' => 'ชายหนุ่ม',
                'lname' => 'นามสกุล',
                'std_prg_id' => 9, 
            ],
            [
                'sid' => 6414421010,
                'fname' => 'หญิงสาว',
                'lname' => 'นามสกุล',
                'std_prg_id' => 10, 
            ],
        ]);
    }
}
