<?php

use Illuminate\Database\Seeder;
use App\Models\Travel;
use Illuminate\Support\Str;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels= [
            [
                'location' => 'panama',
                'date_start' => '2020/11/02', 
                'date_end' => '2020/12/02',
                'price' => '75',
            ],
            [
                'location' => 'lucca',
                'date_start' => '2020/11/02', 
                'date_end' => '2020/12/02',
                'price' => '95',
            ],
            [
                'location' => 'milano',
                'date_start' => '2020/11/02', 
                'date_end' => '2020/12/02',
                'price' => '55',
            ]
        ];

        foreach ($travels as $travel){

            $newTravel = new Travel();

            // inserimento manuale primitivo

            // $newTravel->location = $travel['location'];
            // $newTravel->date_start = $travel['date_start'];
            // $newTravel->date_end = $travel['date_end'];
            // $newTravel->price = $travel['price'];

            // ! metodo fillable . ricordarsi di usare la proprietà fillable del model
            $newTravel->fill($travel);

            $newTravel->slug = Str::slug($travel['location'].$travel['date_start'],'-');

            $newTravel->save();

        }
    }
}
