<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publication;
use Faker\Factory as Faker;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 15; $i++) { 
            $values = ['journal', 'conference'];
        $faker = Faker::create();
        $Publication = new Publication();
        $Publication->pub_id = $i+1;
        $Publication->title = $faker->sentence;
        $Publication->author = $faker->name;
        $Publication->bibtex = $faker->text;
        $Publication->year = $faker->year;
        $Publication->type = $faker->randomElement($values);
        $Publication->link = $faker->url('example.com');
        $Publication->proj_id = $faker->unique()->randomDigit;
        $Publication->created_at = $faker->date;
        $Publication->updated_at = $faker->date;
        $Publication->save();
        }
        
    }
}
