<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 5; $i++) {
            $train = new Train();
            $train->Company = $faker->lexify('');
            $train->Departure_station = $faker->city();
            $train->Arrival_station = $faker->city();
            $train->Departure_time = $faker->time();
            $train->Arrival_tIme = $faker->time();
            $train->Train_code = $faker->bothify('??-##');
            $train->Carriagers = $faker->numberBetween(2, 20);
            $train->In_time = $faker->boolean();
            $train->Deleted = $faker->boolean();
            $train->save();
        }
    }
}
