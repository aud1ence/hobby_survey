<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert([
            'name' => 'Chocolate',
            'description' => Str::random(10),
            'image' => 'chocolate.png',
        ]);

        DB::table('foods')->insert([
            'name' => 'Banana',
            'description' => Str::random(10),
            'image' => 'banana.png',
        ]);

        DB::table('foods')->insert([
            'name' => 'Chicken Luoc',
            'description' => Str::random(10),
            'image' => 'fried_chicken.png',
        ]);
    }
}
