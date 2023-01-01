<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;
use Faker\Factory as Faker;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $values = ["Faculty", "PhD and Post Doc", "Masters", "Bachelors", "Intern"];
for ($i=0; $i < 15; $i++) { 
    $faker = Faker::create();
        $Member = new Member();
        $Member->m_id = $faker->unique()->randomNumber(8);
        $Member->name = $faker->name;
        $Member->email = $faker->unique()->safeEmail;
        $Member->password = $faker->password;
        $Member->img = $faker->imageUrl($width = 640, $height = 640);
        $Member->desgination = $faker->randomElement($values);
        $Member->scholar = $faker->url('example.com');
        $Member->linkedin = $faker->url('linkedin.com');
        $Member->twitter = $faker->url('twitter.com');
        $Member->facebook = $faker->url('facebook.com');
        $Member->created_at = $faker->date;
        $Member->updated_at = $faker->date;
        $Member->save();


}
        
    }
}

