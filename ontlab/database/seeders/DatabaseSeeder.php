<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Education;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            // AwardsSeeder::class,
            // MemberSeeder::class,
            // ExperienceSeeder::class,
            
            // BlogSeeder::class,
            // CommentSeeder::class,
            // DomainSeeder::class,
            // EventsSeeder::class,
            // ProjectSeeder::class,
            PublicationSeeder::class,
        ]);
    }
}
