<?php

namespace Database\Seeders;
use App\Models\Street;
use Illuminate\Database\Seeder;

class StreetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Street::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 15; $i++) {
            Street::create([
                'street_name' => $faker->unique->city(),
                'city_id' => 1
            ]);
        }
        for ($i = 0; $i < 4; $i++) {
            Street::create([
                'street_name' => $faker->unique->city(),
                'city_id' => 2
            ]);
        }
    }
}
