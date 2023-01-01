<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Awards;
use Faker\Factory as Faker;

class AwardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        $Awards = new Awards();
        $Awards->awards_id = $faker->unique()->randomDigit;
        $Awards->title = $faker->title;
        $Awards->year = $faker->year;
        $Awards->organization = $faker->company;
        $Awards->m_id = $faker->randomDigit;
        $Awards->created_at = $faker->date;
        $Awards->updated_at = $faker->date;
        $Awards->save();
    }
}
