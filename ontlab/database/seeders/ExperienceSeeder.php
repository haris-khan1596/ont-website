<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experience;
use Faker\Factory as Faker;


class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $Experience = new Experience();
        $Experience->e_id = $faker->unique()->randomDigit;
        $Experience->m_id = $faker->unique()->randomDigit;
        $Experience->start = $faker->year();
        $Experience->end = $faker->year();
        $Experience->designation = $faker->title;
        $Experience->institute = $faker->company;
        $Experience->created_at = $faker->date;
        $Experience->updated_at = $faker->date;
        $Experience->save();
    }
}
