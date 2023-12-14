<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;


class TrainSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++){
            $new_train = new Train();
            $new_train->company = $faker->lexify();
            $new_train->departure_station = $faker->city();
            do {
                $new_train->arrival_station = $faker->city();
            } while($new_train->arrival_station == $new_train->departure_station);
            $new_train->departure_date = $faker->dateTimeBetween('now', '+1 year');
            $new_train->departure_time = $faker->time();
            do {
                $new_train->arrival_date = $faker->dateTimeBetween('now', '+1 year');
            } while ($new_train->arrival_date >= $new_train->departure_date);
            do {
                $new_train->arrival_time = $faker->time();
            }while ($new_train->arrival_time <= $new_train->departure_time);
            $new_train->train_id = $faker->bothify('?????-#####');
            $new_train->n_carriages = $faker->numberBetween(0, 50);
            $new_train->is_on_time = $faker->randomElement([false, true]);
            $new_train->is_cancelled = $faker->randomElement([false, true]);
            $new_train->save();
        }
    }
}
