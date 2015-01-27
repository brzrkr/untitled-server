<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Comment::create([
                'content' => $faker->text(100),
                'user_id' => rand(1, 2),
                'post_id' => rand(1, 10)
			]);
		}
	}

}