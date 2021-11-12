<?php

use Illuminate\Database\Seeder;
use App\Models\Travel;
use Illuminate\Support\Str;

// con il comando seguente importo risorse in php e do loro un nome 
use Faker\Generator as Faker;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for( $i=0; $i<20; $i++ ){
            $newTravel = new Travel();
            $newTravel->location = $faker->state();
            $newTravel->date_start = $faker->date();
            $newTravel->date_end = $faker->date();
            $newTravel->price = $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 99);

            $newTravel->slug = Str::slug( $newTravel->location.$newTravel->price , '-');

            $newTravel->save();
        }
    }
}

// public function run()
//     {
//         $travels= [
//             [
//                 'location' => 'panama',
//                 'date_start' => '2020/11/02', 
//                 'date_end' => '2020/12/02',
//                 'price' => '75',
//             ],
//             [
//                 'location' => 'lucca',
//                 'date_start' => '2020/11/02', 
//                 'date_end' => '2020/12/02',
//                 'price' => '95',
//             ],
//             [
//                 'location' => 'milano',
//                 'date_start' => '2020/11/02', 
//                 'date_end' => '2020/12/02',
//                 'price' => '55',
//             ]
//         ];

//         foreach ($travels as $travel){

//             $newTravel = new Travel();

//             // inserimento manuale primitivo

//             // $newTravel->location = $travel['location'];
//             // $newTravel->date_start = $travel['date_start'];
//             // $newTravel->date_end = $travel['date_end'];
//             // $newTravel->price = $travel['price'];

//             // ! metodo fillable . ricordarsi di usare la proprietà fillable del model
//             $newTravel->fill($travel);

//             $newTravel->slug = Str::slug($travel['location'].$travel['date_start'],'-');

//             $newTravel->save();

//         }
//     }