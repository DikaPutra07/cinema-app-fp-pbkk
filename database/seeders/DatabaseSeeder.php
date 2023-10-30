<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $genre = Genre::all();
        $data = [
            [
                'title' => 'The Shawshank Redemption',
                'description' => 'film bagus cuy',
                
                'duration' => '142',
                'release_date' => '1994-09-10',
                'rating' => 9,
                'maturity_rating' => 'PG-13',
                'language' => 'English',
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/q6y0Go1tsGEsmtFryDOJo3dEmqu.jpg',
                'genre_id' => $genre->where('name', 'Drama')->first()->id,
            ],
            [
                'title' => 'The Godfather',
                'description' => 'film bagus cuy',
                
                'duration' => '175',
                'release_date' => '1972-03-14',
                'rating' => 9,
                'maturity_rating' => 'R',
                'language' => 'English',
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/3bhkrj58Vtu7enYsRolD1fZdja1.jpg',
                'genre_id' => $genre->where('name', 'Family')->first()->id,
            ],
            [
                'title' => 'The Dark Knight',
                'description' => 'film bagus cuy',
                
                'duration' => '152',
                'release_date' => '2008-07-16',
                'rating' => 9,
                'maturity_rating' => 'PG-13',
                'language' => 'English',
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qJ2tW6WMUDux911r6m7haRef0WH.jpg',
                'genre_id' => $genre->where('name', 'Action')->first()->id,
            ],
            [
                'title' => 'John Wick',
                'description' => 'film bagus cuy',
            
                'duration' => '101',
                'release_date' => '2014-10-22',
                'rating' => 7,
                'maturity_rating' => 'R',
                'language' => 'English',
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/5vHssUeVe25bMrof1HyaPyWgaP.jpg',
                'genre_id' => $genre->where('name', 'Action')->first()->id,
            ],
            
        ];

        Movie::insert($data);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

