<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $Project = new Project();
        $Project->proj_id = $faker->unique()->randomDigit;
        $Project->title = $faker->sentence;
        $Project->description = $faker->paragraph;
        $Project->goal = $faker->text;
        $Project->data = $faker->text;
        $Project->d_id = $faker->unique()->randomDigit;
        $Project->created_at = $faker->date;
        $Project->updated_at = $faker->date;
        $Project->save();  
    }
}
