<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
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
            Post::create([
                'title' => $faker->sentence(),
                'content' => $faker->paragraph(10),
                'likes' => 0,
                'updated_at' => null,
                'created_at' => $faker->dateTime(),
                'img_src' => $faker->imageUrl(640, 480, 'cats', true, 'Faker'),
                'user_id' => User::inRandomOrder()->first()->id,
            ]);
        }
    }
}
