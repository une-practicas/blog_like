<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * php artisan migrate:refresh --seed
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersTableSeeder::class,
        PostsTableSeeder::class,
        RelashionshipsTableSeeder::class,
        ]);
    }
}
