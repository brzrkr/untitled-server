<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MessagesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Message::create([
                'content' => $faker->text(100),
                'user_id' => rand(1, 2),
                'conversation_id' => rand(1, 10)
			]);
		}
	}

}
