<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Domain;
use Faker\Factory as Faker;
use Faker\Provider\Image;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $Domain = new Domain();
        $Domain->d_id = $faker->unique()->randomDigit();;
        $Domain->name = $faker->name();
        $Domain->icon = $faker->imageUrl(640, 480, 'icon', true);
        $Domain->description = $faker->text();
        $Domain->objective = $faker->text();
        $Domain->created_at = $faker->date();
        $Domain->updated_at = $faker->date();
        $Domain->save();
    }
}
