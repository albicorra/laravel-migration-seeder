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
            $train->data_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->stazione_di_partenza = $faker->word();
            $train->stazione_di_arrivo = $faker->word();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->bothify('???-######');
            $train->numero_carrozze = $faker->numberBetween(0, 15);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            $train->save();
        }
    }
}
