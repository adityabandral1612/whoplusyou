<?php

namespace Database\Seeders;
use App\Models\House;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        House::truncate();

        $faker = \Faker\Factory::create();
        
        for ($i = 0; $i < 5; $i++) {
            House::create([
                'address' => $faker->address(),
                'street_id' => 1
            ]);
        }
        for ($i = 0; $i < 5; $i++) {
            House::create([
                'address' => $faker->address(),
                'street_id' => 2
            ]);
        }
    }
}
