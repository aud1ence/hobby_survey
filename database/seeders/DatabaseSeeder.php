<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\Survey;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10)->create();
        $this->call([
            FoodsSeeder::class,
            PetsSeeder::class,
        ]);
        Survey::factory(100)->create();
    }
}
