<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker=Faker::create();
        for($i = 0;$i<20;$i++){
        $user = new User;
        $user->name = $faker->name;
        $user->email = $faker->unique()->email;
        $user->password = Hash::make("memopays"); 
        $user->save();    
        }   
        



        
    }
}
