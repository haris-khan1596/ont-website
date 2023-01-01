<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Member;
use Faker\Factory as Faker;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $Blog = new Blog();
        $Blog->blog_id = $faker->unique()->randomDigit;
        $Blog->date = $faker->date;
        $Blog->data = $faker->text;
        $Blog->created_at = $faker->date;
        $Blog->updated_at = $faker->date;
        $Blog->save();

    }
}



