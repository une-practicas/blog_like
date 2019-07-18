<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * php artisan migrate:refresh --seed
     * php artisan make:seeder RelashionshipsTableSeeder ** crear seeder
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        UsersTableSeeder::class, 
        PostsTableSeeder::class, 
        RelationshipsTableSeeder::class,
        ]);
    }
}
