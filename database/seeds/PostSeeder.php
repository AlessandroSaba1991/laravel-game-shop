<?php

use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $new_game = new Post();
            $new_game->title = $faker->sentence(3);
            $new_game->body = $faker->paragraphs(3, true);
            $new_game->cover_image = 'https://picsum.photos/200/300?random=' . "$i";
            $new_game->save();
        }
    }
}
