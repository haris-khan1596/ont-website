<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use Faker\Factory as Faker;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $Comment = new Comment();
        $Comment->comment_id = $faker->unique()->randomDigit;
        $Comment->blog_id = $faker->unique()->randomDigit;
        $Comment->name = $faker->name;
        $Comment->email = $faker->email;
        $Comment->comment = $faker->text;
        $Comment->created_at = $faker->date();
        $Comment->updated_at = $faker->date();
        $Comment->save();
    }
}
