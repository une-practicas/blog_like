<?php

use App\User;
use App\Post;
use App\Relationship;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RelashionshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 500; $i++) {

            $id1 = User::inRandomOrder()->first()->id;
            $id2 = User::inRandomOrder()->first()->id;
            if(Relationship::where([
                ['user1_id','=',$id1],
                ['user2_id','=',$id2],
            ])->count() == 0){
                Relationship::create([
                    'user1_id' => User::inRandomOrder()->first()->id,
                    'user2_id' => User::inRandomOrder()->first()->id,
                    'follow' => $faker->boolean(),
                    'friend' => $faker->boolean(),
                    'block' => $faker->boolean(10),
                ]);
            }
        }
    }
}
