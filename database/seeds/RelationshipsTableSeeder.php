<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Post;
use App\User;
use App\Relationship;

class RelationshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for ($i=0; $i < 100; $i++) { 
            $user1_id=User::inRandomOrder()->first()->id;
            $user2_id=User::inRandomOrder()->first()->id;
            if($user1_id != $user2_id){
                if(Relationship::where([
                    ["user1_id","=",$user1_id],
                    ["user2_id","=",$user2_id]  
                ])->count() == 0){
                $relationship = new Relationship;
                $relationship->user1_id=$user1_id;
                $relationship->user2_id=$user2_id;
                $relationship->follow = $faker->boolean();
                $relationship->friend = $faker->boolean();
                $relationship->block = $faker->boolean(10);
                $relationship->save();
            }
        }
    }
        
    }
}
