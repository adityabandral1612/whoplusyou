<?php

namespace Database\Seeders;
use App\Models\Car;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::truncate();

        $faker = \Faker\Factory::create();
        $p_id = [4,7,10,15,21,25,29,34];
        for ($i = 1; $i < 9; $i++) {
            Car::create([
                'license_plate' => $faker->regexify('[A-Za-z0-9]{20}'),
                'brand' => 'BMW',
                'color' => 'Black',
                'house_id' => $i,
                'person_id' => $p_id[$i-1]
            ]);
        }
    }
}
