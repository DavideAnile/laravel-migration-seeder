<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

       for($i = 0; $i < 30; $i ++) {

           $newTrain = new Train();
   
           $newTrain->azienda = $faker->word();
           $newTrain->departure_station = $faker->city();
           $newTrain->arrival_station = $faker->city();
           $newTrain->departure_time = $faker->dateTimeBetween('-3 days', '+1 week')->format('Y-m-d H:i:s');
           $newTrain->arrival_time = $faker->dateTimeBetween('-2 days', '+1 week')->format('Y-m-d H:i:s');
           $newTrain->train_code = $faker->numberBetween(1000 , 9000);
           $newTrain->carriages_number = $faker->numberBetween(5, 20);
           $newTrain->in_time = $faker->boolean();
           $newTrain->is_deleted = $faker->boolean();

           
   
           
           $newTrain->save();

       }

    }
}
