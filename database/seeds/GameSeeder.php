<?php

use App\Game;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $new_game = new Game();
            $new_game->title = $faker->sentence(3);
            $new_game->thumb = $faker->imageUrl(640, 320, 'games', true, 'game', true);
            $new_game->description = $faker->paragraphs(3, true);
            $new_game->cover_image = $faker->imageUrl(640, 320, 'games', true, 'game', true);
            $new_game->save();
        }
    }
}
