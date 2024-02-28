<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::truncate();

        for ($i = 0; $i < 10 ; $i++) {
            $movie = new Movie();
            $movie->title = fake()->
            $movie->save();   
    }
    }
}
