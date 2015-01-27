<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name' => 'Nic Dienstbier',
            'phone' => '9569007200',
            'username' => 'brzrkr',
            'password' => Hash::make('test'),
            'email' => 'nic@kilt.io',
            'bio' => 'Newbie fisher, but I love it.',
        ]);

        User::create([
            'name' => 'Mauricio Pina',
            'username' => 'mpina',
            'password' => Hash::make('test'),
            'email' => 'mauricio@imagineitstudios.com',
        ]);

    }

}
