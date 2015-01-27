<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Post::create([
                'type' => $faker->randomElement(Post::$types),
                'likes' => rand(0, 100),
                'user_id' => rand(1, 2),
                'spot_id' => rand(1, 5),
                'lat' => $faker->latitude,
                'lng' => $faker->longitude,
                'content' => $faker->text(100)
			]);
		}
	}

}
