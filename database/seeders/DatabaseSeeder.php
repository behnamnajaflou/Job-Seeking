<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
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
         \App\Models\User::factory(10)->create();

         Listing::factory(6)->create();

        //  Listing::create([
        //     'title' => 'Laravel junior Developer',
        //     'tags' => 'laravel, javaScript, php',
        //     'company' => 'Laravel CO',
        //     'location' => 'Milan',
        //     'email' => 'Laravelco@gmail.com',
        //     'website' => 'Laravelco.com',
        //     'description' => 'Laravel junior Developer. Laravel junior Developer. Laravel junior Developer. Laravel junior Developer',
        //  ]);

        //  Listing::create([
        //     'title' => 'Backend Developer',
        //     'tags' => 'Java, javaScript, php',
        //     'company' => 'Master CO',
        //     'location' => 'Rome',
        //     'email' => 'master@gmail.com',
        //     'website' => 'master.com',
        //     'description' => 'Laravel junior Developer. Laravel junior Developer. Laravel junior Developer. Laravel junior Developer',
        //  ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
