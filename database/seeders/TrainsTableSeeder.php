<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $train = new Train();
        $train->id = $faker->unique->randomNumber(3, false);
        $train->company = $faker->randomElement(['Trenitalia', "Italo"]);
        $train->from = $faker->randomElement(['Milan', 'Rome', 'Naples', 'Turin', 'Venice', 'Genoa', 'Florence', 'Bologna']);
        $train->destination = $faker->randomElement(['Milan', 'Rome', 'Naples', 'Turin', 'Venice', 'Genoa', 'Florence', 'Bologna']);
        $train->departure = $faker->dateTime('-1 week', '+10 week');
        $train->arrival = $train->departure;
        $train->train_number = $faker->randomNumber(7, false);
        $train->couch = $faker->numberBetween(2, 50);
        $train->price = $faker->randomFloat(2, 200, 10000);
        $train->save();
    }
}
