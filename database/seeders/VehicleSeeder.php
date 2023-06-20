<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * @var $faker Generator
         */
        $faker = app(Generator::class);

        for ($i = 0; $i < 50; $i++) {
            Vehicle::create([
                'make' => $faker->word(),
                'model' => $faker->word(),
                'is_available' => true,
            ]);
        }
    }
}
