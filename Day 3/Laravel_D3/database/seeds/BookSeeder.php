<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {
            DB::table('books')->insert([
                'title' => Str::random(15),
                'price' => rand(3, 999),
                'author_id' => rand(1, 10)
            ]);
        }
    }
}
