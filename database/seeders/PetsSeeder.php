<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pets')->insert([
            'name' => 'Dog',
            'description' => Str::random(10),
            'image' => 'dog.jpg',
        ]);

        DB::table('pets')->insert([
            'name' => 'Cat',
            'description' => Str::random(10),
            'image' => 'cat.jpg',
        ]);

        DB::table('pets')->insert([
            'name' => 'Hamster',
            'description' => Str::random(10),
            'image' => 'hamster.jpeg',
        ]);
    }
}
