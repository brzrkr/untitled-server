<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SpotsTableSeeder extends Seeder {

    public function run()
    {
        Spot::create([
            'lat' => 26.092801,
            'lng' => -97.181454,
            'title' => "S.P.I",
        ]);

        Spot::create([
            'lat' => 26.130081,
            'lng' => -97.909985,
            'title' => "Mercedes Waterfall",
        ]);

        Spot::create([
            'lat' => 26.685060,
            'lng' => -97.42732,
            'title' => "Laguna Madre",
        ]);

        Spot::create([
            'lat' => 26.15401,
            'lng' => -97.17807,
            'title' => "Cullen House",
        ]);

        Spot::create([
            'lat' => 26.080610,
            'lng' => -97.204113,
            'title' => "Pirate's Landing Pier",
        ]);
    }

}
