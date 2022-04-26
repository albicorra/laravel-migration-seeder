<?php

use App\train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 1000; $i++) { 
            $train = new train();

            $train->azienda = $faker->company();

            $train->save();
        }
    }
}
