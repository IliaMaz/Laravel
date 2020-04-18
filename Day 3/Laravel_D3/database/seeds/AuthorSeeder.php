<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {
            // * random date from: thisinterestsme.com/generate-random-date-php/
            $timestamp = mt_rand(1, time());
            $randomDate = date('Y-m-d', $timestamp);
            $gendArr = ['female', 'male', 'other'];
            $randGender = array_rand($gendArr);
            $gender = $gendArr[$randGender];
            DB::table('authors')->insert([
                'name' => Str::random(9),
                'date_of_birth' => $randomDate,
                'gender' => $gender
            ]);
        }
    }
}
