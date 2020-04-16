<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 30; $i++) {
            DB::table('books')->insert([
                'title' => Str::random(15),
                'price' => rand(3, 999)
            ]);
        }
        // $this->call(UserSeeder::class);
    }
}
