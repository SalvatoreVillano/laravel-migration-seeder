<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->Azienda = $faker->word();
            $newTrain->Stazione_Partenza = $faker->words(3, true);
            $newTrain->Stazione_Arrivo = $faker->words(3, true);
            $newTrain->Orario_Partenza = $faker->time();
            $newTrain->Orario_Arrivo = $faker->time();
            $newTrain->Codice_Treno = $faker->randomNumber(5, true);
            $newTrain->Num_Carrozze = $faker->randomDigitNotNull();
            $newTrain->In_Orario = $faker->numberBetween(0, 1);
            $newTrain->Cancellato = $faker->numberBetween(0, 1);

            $newTrain->save();

    }
}
}
