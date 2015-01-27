<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
        $this->call('SpotsTableSeeder');
        $this->call('ConversationsTableSeeder');
        $this->call('MessagesTableSeeder');
        $this->call('PostsTableSeeder');
        $this->call('CommentsTableSeeder');
	}

}
