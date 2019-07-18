<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Post;
use App\User;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for($i=0;$i<200;$i++){
        $post = new Post;
        $post->title=$faker->sentence();
        $post->created_at=$faker->dateTime();
        $post->content=$faker->paragraph(10);
        $post->likes=0;
        $post->updated_at=null;
        $post->img_src=$faker->imageUrl();
        $post->user_id=User::inRandomOrder()->first()->id;
        $post->save();
        }
    }
}
