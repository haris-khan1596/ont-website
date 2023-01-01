<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Events;
use Faker\Factory as Faker;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
        
        $faker = Faker::create();

  
            $Events = new Events();
            $Events->event_id = $faker->unique()->randomDigit;
            $Events->title = $faker->sentence;
            $Events->location = $faker->city;
            $Events->description = $faker->paragraph;
            $Events->timmings = $faker->dateTime;
            $Events->objective = $faker->text;
            $Events->d_id = $faker->unique()->randomDigit;
            $Events->created_at = $faker->date;
            $Events->updated_at = $faker->date;
            $Events->save();        
        

    }

}
