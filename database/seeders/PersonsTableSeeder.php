<?php

namespace Database\Seeders;
use App\Models\Person;
use Illuminate\Database\Seeder;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::truncate();

        $faker = \Faker\Factory::create();
        
        for ($i = 1; $i < 10; $i++) {
            for ($j = 1; $j < 5; $j++) {
                Person::create([
                    'person_name' => $faker->unique->name(),
                    'age' => $faker->numerify('##'),
                    'house_id' => $i
                ]);
            }
        }
    }
}
