<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 50; $i++) { 
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => Hash::make('123456789'),
            ]);
        }
    }
}
