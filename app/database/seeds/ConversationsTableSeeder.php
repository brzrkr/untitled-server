<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ConversationsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
            $user = rand(1, 2);
            $receiver = ($user == 1) ? 2 : 1;

			Conversation::create([
                'subject' => $faker->sentence(8),
                'user_id' => $user,
                'receiver_id' => $receiver
			]);
		}
	}

}
