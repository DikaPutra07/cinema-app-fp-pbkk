<?php

namespace Database\Seeders;

use App\Models\Actor;
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
        Genre::create(['name' => 'Action']);
        Genre::create(['name' => 'Comedy']);
        Genre::create(['name' => 'Drama']);
        Genre::create(['name' => 'Family']);
        Genre::create(['name' => 'Horror']);
        Genre::create(['name' => 'Romance']);

        Actor::create([
            'name' => 'Christian Bale',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/AcfW3p5D6ov573fABLyGqwYdolD.jpg',
        ]);
        Actor::create([
            'name' => 'Heath Ledger',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/p2z2bURSg7nuMsN9P2s61e2RvNz.jpg',
        ]);
        Actor::create([
            'name' => 'Michael Caine',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/hZruclwEPCKw3e83rnFSIH5sRFZ.jpg'
        ]);
        Actor::create([
            'name' => 'Gary Oldman',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/hHP0769L7YrApkMKCOyb9cwgxBW.jpg'
        ]);
        Actor::create([
            'name' => 'Keanu Reeves',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/tgWjOflzUXikIu3jZrWneFeDOCA.jpg'
        ]);
        Actor::create([
            'name' => 'Michael Nyqvist',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/d9nGt8MloJwosRbGp10gaeHExcZ.jpg'
        ]);
        Actor::create([
            'name' => 'Ian McShane',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/qh9RTLbnr128TZLdGuXwUH9mdBM.jpg'
        ]);
        Actor::create([
            'name' => 'John Leguizamo',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/kwYCdxTlDh9zauUCg4mp2XTCQTw.jpg'
        ]);
        Actor::create([
            'name' => 'Laurence Fishburne',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/iwx7h0AfWMm9K4sMmhru3ShSra.jpg'
        ]);
        Actor::create([
            'name' => 'Carrie-Anne Moss',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/xD4jTA3KmVp5Rq3aHcymL9DUGjD.jpg'
        ]);
        Actor::create([
            'name' => 'Hugo Weaving',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/lSC8Et0PYi5zeQb3IpPkFje7hgR.jpg'
        ]);
        
        $genre = Genre::all();
        // Action Movies
        Movie::create([
            // 1 The Dark Knight
            'title' => 'The Dark Knight',
            'description' => 'Batman raises the stakes in his war on crime. With the help of Lt. Jim Gordon and District Attorney Harvey Dent, Batman sets out to dismantle the remaining criminal organizations that plague the streets. The partnership proves to be effective, but they soon find themselves prey to a reign of chaos unleashed by a rising criminal mastermind known to the terrified citizens of Gotham as the Joker.',
            'duration' => 152,
            'release_date' => '2008-07-16',
            'rating' => 9,
            'maturity_rating' => 'PG-13',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qJ2tW6WMUDux911r6m7haRef0WH.jpg',
            'genre_id' => $genre->where('name', 'Action')->first()->id,
        ]);
        Movie::create([
            // 2 John Wick
            'title' => 'John Wick',
            'description' => 'Ex-hitman John Wick comes out of retirement to track down the gangsters that took everything from him.',
            'duration' => 101,
            'release_date' => '2014-10-22',
            'rating' => 7,
            'maturity_rating' => 'R',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fZPSd91yGE9fCcCe6OoQr6E3Bev.jpg',
            'genre_id' => $genre->where('name', 'Action')->first()->id,
        ]);
        Movie::create([
            // 3 The Matrix
            'title' => 'The Matrix',
            'description' => 'Set in the 22nd century, The Matrix tells the story of a computer hacker who joins a group of underground insurgents fighting the vast and powerful computers who now rule the earth.',
            'duration' => 136,
            'release_date' => '1999-03-30',
            'rating' => 8,
            'maturity_rating' => 'R',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/f89U3ADr1oiB1s9GkdPOEpXUk5H.jpg',
            'genre_id' => $genre->where('name', 'Action')->first()->id,
        ]);
        Movie::create([
            // 4 The Lord of the Rings: The Return of the King
            'title' => 'The Lord of the Rings: The Return of the King',
            'description' => 'Aragorn is revealed as the heir to the ancient kings as he, Gandalf and the other members of the broken fellowship struggle to save Gondor from Sauron\'s forces. Meanwhile, Frodo and Sam take the ring closer to the heart of Mordor, the dark lord\'s realm.',
            'duration' => 201,
            'release_date' => '2003-12-01',
            'rating' => 8,
            'maturity_rating' => 'PG-13',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/rCzpDGLbOoPwLjy3OAm5NUPOTrC.jpg',
            'genre_id' => $genre->where('name', 'Action')->first()->id,
        ]);
        Movie::create([
            // 5 The Good, the Bad and the Ugly
            'title' => 'The Good, the Bad and the Ugly',
            'description' => 'While the Civil War rages on between the Union and the Confederacy, three men – a quiet loner, a ruthless hitman, and a Mexican bandit – comb the American Southwest in search of a strongbox containing $200,000 in stolen gold.',
            'duration' => 161,
            'release_date' => '1966-12-23',
            'rating' => 8,
            'maturity_rating' => 'R',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/bX2xnavhMYjWDoZp1VM6VnU1xwe.jpg',
            'genre_id' => $genre->where('name', 'Action')->first()->id,
        ]);

        // Comedy Movies
        Movie::create([
            // 6 Superbad
            'title' => 'Superbad',
            'description' => 'Two co-dependent high school seniors are forced to deal with separation anxiety after their plan to stage a booze-soaked party goes awry.',
            'duration' => 113,
            'release_date' => '2007-08-17',
            'rating' => 7,
            'maturity_rating' => 'R',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/aqr4CdX6eeA5UkVAJzKZMs7FeEw.jpg',
            'genre_id' => $genre->where('name', 'Comedy')->first()->id,
        ]);
        Movie::create([
            // 7 The Hangover
            'title' => 'The Hangover',
            'description' => 'When three friends finally come to after a raucous night of bachelor-party revelry, they find a baby in the closet and a tiger in the bathroom. But they can\'t seem to locate their best friend, Doug – who\'s supposed to be tying the knot. Launching a frantic search for Doug, the trio perseveres through a nasty hangover to try to make it to the church on time.',
            'duration' => 100,
            'release_date' => '2009-06-05',
            'rating' => 7,
            'maturity_rating' => 'R',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/uluhlXubGu1VxU63X9VHCLWDAYP.jpg',
            'genre_id' => $genre->where('name', 'Comedy')->first()->id,
        ]);
        Movie::create([
            // 8  Barbie
            'title' => 'Barbie',
            'description' => 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.',
            'duration' => 112,
            'release_date' => '2023-07-19',
            'rating' => 8,
            'maturity_rating' => 'PG-13',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/yBvoDlzpKx9HRk2Pcp8gc0E6SYP.jpg',
            'genre_id' => $genre->where('name', 'Comedy')->first()->id,
        ]);
        Movie::create([
            // 9 Puss in Boots: The Last Wish
            'title' => 'Puss in Boots: The Last Wish',
            'description' => 'Puss in Boots discovers that his passion for adventure has taken its toll: He has burned through eight of his nine lives, leaving him with only one life left. Puss sets out on an epic journey to find the mythical Last Wish and restore his nine lives.',
            'duration' => 112,
            'release_date' => '2022-12-28',
            'rating' => 9,
            'maturity_rating' => 'G',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/kuf6dutpsT0vSVehic3EZIqkOBt.jpg',
            'genre_id' => $genre->where('name', 'Comedy')->first()->id,
        ]);
        Movie::create([
            // 10 Scary Movie
            'title' => 'Scary Movie',
            'description' => 'A familiar-looking group of teenagers find themselves being stalked by a more-than-vaguely recognizable masked killer! As the victims begin to pile up and the laughs pile on, none of your favorite scary movies escape the razor-sharp satire of this outrageously funny parody!',
            'duration' => 88,
            'release_date' => '2001-01-20',
            'rating' => 7,
            'maturity_rating' => 'R',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/lRQiJXETkCnVVurHmglNvMXrZOx.jpg',
            'genre_id' => $genre->where('name', 'Comedy')->first()->id,
        ]);

        // Drama Movies
        Movie::create([
            // 11 Shawshank Redemption
            'title' => 'The Shawshank Redemption',
            'description' => 'Framed in the 1940s for the double murder of his wife and her lover, upstanding banker Andy Dufresne begins a new life at the Shawshank prison, where he puts his accounting skills to work for an amoral warden. During his long stretch in prison, Dufresne comes to be admired by the other inmates -- including an older prisoner named Red -- for his integrity and unquenchable sense of hope.',
            'duration' => 142,
            'release_date' => '1994-09-10',
            'rating' => 9,
            'maturity_rating' => 'PG-13',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/q6y0Go1tsGEsmtFryDOJo3dEmqu.jpg',
            'genre_id' => $genre->where('name', 'Drama')->first()->id,
        ]);
        Movie::create([
            // 12 Forest Gump
            'title' => 'Forrest Gump',
            'description' => 'A man with a low IQ has accomplished great things in his life and been present during significant historic events—in each case, far exceeding what anyone imagined he could do. But despite all he has achieved, his one true love eludes him.',
            'duration' => 142,
            'release_date' => '1994-07-06',
            'rating' => 9,
            'maturity_rating' => 'PG-13',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/arw2vcBveWOVZr6pxd9XTd1TdQa.jpg',
            'genre_id' => $genre->where('name', 'Drama')->first()->id,
        ]);
        Movie::create([
            // 13 Oppenheimer
            'title' => 'Oppenheimer',
            'description' => 'The story of J. Robert Oppenheimer’s role in the development of the atomic bomb during World War II.',
            'duration' => 181,
            'release_date' => '2023-07-19',
            'rating' => 9,
            'maturity_rating' => 'PG-13',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/8Gxv8gSFCU0XGDykEGv7zR1n2ua.jpg',
            'genre_id' => $genre->where('name', 'Drama')->first()->id,
        ]);
        Movie::create([
            // 14 Interstellar
            'title' => 'Interstellar',
            'description' => 'The adventures of a group of explorers who make use of a newly discovered wormhole to surpass the limitations on human space travel and conquer the vast distances involved in an interstellar voyage.',
            'duration' => 169,
            'release_date' => '2014-11-06',
            'rating' => 9,
            'maturity_rating' => 'PG-13',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/gEU2QniE6E77NI6lCU6MxlNBvIx.jpg',
            'genre_id' => $genre->where('name', 'Drama')->first()->id,
        ]);
        Movie::create([
            // 15 Blade Runner 2049
            'title' => 'Blade Runner 2049',
            'description' => 'Thirty years after the events of the first film, a new blade runner, LAPD Officer K, unearths a long-buried secret that has the potential to plunge what\'s left of society into chaos. K\'s discovery leads him on a quest to find Rick Deckard, a former LAPD blade runner who has been missing for 30 years.',
            'duration' => 183,
            'release_date' => '2017-10-06',
            'rating' => 8,
            'maturity_rating' => 'R',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/gajva2L0rPYkEWjzgFlBXCAVBE5.jpg',
            'genre_id' => $genre->where('name', 'Drama')->first()->id,
        ]);

        // Family Movies
        Movie::create([
            // 16 The Godfather
            'title' => 'The Godfather',
            'description' => 'Spanning the years 1945 to 1955, a chronicle of the fictional Italian-American Corleone crime family. When organized crime family patriarch, Vito Corleone barely survives an attempt on his life, his youngest son, Michael steps in to take care of the would-be killers, launching a campaign of bloody revenge.',
            'duration' => 175,
            'release_date' => '1972-03-14',
            'rating' => 9,
            'maturity_rating' => 'R',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/3bhkrj58Vtu7enYsRolD1fZdja1.jpg',
            'genre_id' => $genre->where('name', 'Family')->first()->id,
        ]);
        Movie::create([
            // 17 The Godfather: Part II
            'title' => 'The Godfather: Part II',
            'description' => 'In the continuing saga of the Corleone crime family, a young Vito Corleone grows up in Sicily and in 1910s New York. In the 1950s, Michael Corleone attempts to expand the family business into Las Vegas, Hollywood and Cuba.',
            'duration' => 202,
            'release_date' => '1974-12-20',
            'rating' => 9,
            'maturity_rating' => 'R',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/hek3koDUyRQk7FIhPXsa6mT2Zc3.jpg',
            'genre_id' => $genre->where('name', 'Family')->first()->id,
        ]);
        Movie::create([
            // 18 Finding Nemo
            'title' => 'Finding Nemo',
            'description' => 'Nemo, an adventurous young clownfish, is unexpectedly taken from his Great Barrier Reef home to a dentist\'s office aquarium. It\'s up to his worrisome father Marlin and a friendly but forgetful fish Dory to bring Nemo home -- meeting vegetarian sharks, surfer dude turtles, hypnotic jellyfish, hungry seagulls, and more along the way.',
            'duration' => 100,
            'release_date' => '2003-05-30',
            'rating' => 8,
            'maturity_rating' => 'G',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/ggQ6o8X5984OCh3kZi2UIJQJY5y.jpg',
            'genre_id' => $genre->where('name', 'Family')->first()->id,
        ]);
        Movie::create([
            // 19 The Lion King
            'title' => 'The Lion King',
            'description' => 'Simba idolizes his father, King Mufasa, and takes to heart his own royal destiny. But not everyone in the kingdom celebrates the new cub\'s arrival. Scar, Mufasa\'s brother—and former heir to the throne—has plans of his own. The battle for Pride Rock is ravaged with betrayal, tragedy and drama, ultimately resulting in Simba\'s exile. With help from a curious pair of newfound friends, Simba will have to figure out how to grow up and take back what is rightfully his.',
            'duration' => 89,
            'release_date' => '1994-06-23',
            'rating' => 8,
            'maturity_rating' => 'G',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/2bXbqYdUdNVa8VIWXVfclP2ICtT.jpg',
            'genre_id' => $genre->where('name', 'Family')->first()->id,
        ]);
        Movie::create([
            // 20 The Incredibles
            'title' => 'The Incredibles',
            'description' => 'Bob Parr has given up his superhero days to log in time as an insurance adjuster and raise his three children with his formerly heroic wife in suburbia. But when he receives a mysterious assignment, it\'s time to get back into costume.',
            'duration' => 105,
            'release_date' => '2004-11-05',
            'rating' => 8,
            'maturity_rating' => 'PG',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/2LqaLgk4Z226KkgPJuiOQ58wvrm.jpg',
            'genre_id' => $genre->where('name', 'Family')->first()->id,
        ]);

        // Horror Movies
        Movie::create([
            // 21 The Conjuring
            'title' => 'The Conjuring',
            'description' => 'Paranormal investigators Ed and Lorraine Warren work to help a family terrorized by a dark presence in their farmhouse. Forced to confront a powerful entity, the Warrens find themselves caught in the most terrifying case of their lives.',
            'duration' => 112,
            'release_date' => '2013-07-19',
            'rating' => 7,
            'maturity_rating' => 'R',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/wVYREutTvI2tmxr6ujrHT704wGF.jpg',
            'genre_id' => $genre->where('name', 'Horror')->first()->id,
        ]);
        Movie::create([
            // 22 Saw X
            'title' => 'Saw X',
            'description' => 'Between the events of \'Saw\' and \'Saw II\', a sick and desperate John Kramer travels to Mexico for a risky and experimental medical procedure in hopes of a miracle cure for his cancer, only to discover the entire operation is a scam to defraud the most vulnerable. Armed with a newfound purpose, the infamous serial killer returns to his work, turning the tables on the con artists in his signature visceral way through devious, deranged, and ingenious traps.',
            'duration' => 118,
            'release_date' => '2023-09-29',
            'rating' => 8,
            'maturity_rating' => 'R',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/aQPeznSu7XDTrrdCtT5eLiu52Yu.jpg',
            'genre_id' => $genre->where('name', 'Horror')->first()->id,
        ]);
        Movie::create([
            // 23 Evil Dead Rise
            'title' => 'Evil Dead Rise',
            'description' => 'A reunion between two estranged sisters gets cut short by the rise of flesh-possessing demons, thrusting them into a primal battle for survival as they face the most nightmarish version of family imaginable.',
            'duration' => 96,
            'release_date' => '2023-05-05',
            'rating' => 7,
            'maturity_rating' => 'NC-17',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/5ik4ATKmNtmJU6AYD0bLm56BCVM.jpg',
            'genre_id' => $genre->where('name', 'Horror')->first()->id,
        ]);
        Movie::create([
            // 24 The Nun
            'title' => 'The Nun',
            'description' => 'A priest with a haunted past and a novice on the threshold of her final vows are sent by the Vatican to investigate the death of a young nun in Romania and confront a malevolent force in the form of a demonic nun.',
            'duration' => 96,
            'release_date' => '2018-09-07',
            'rating' => 6,
            'maturity_rating' => 'R',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/sFC1ElvoKGdHJIWRpNB3xWJ9lJA.jpg',
            'genre_id' => $genre->where('name', 'Horror')->first()->id,
        ]);
        Movie::create([
            // 25 Smile
            'title' => 'Smile',
            'description' => 'After witnessing a bizarre, traumatic incident involving a patient, Dr. Rose Cotter starts experiencing frightening occurrences that she can\'t explain. As an overwhelming terror begins taking over her life, Rose must confront her troubling past in order to survive and escape her horrifying new reality.',
            'duration' => 105,
            'release_date' => '2022-09-30',
            'rating' => 7,
            'maturity_rating' => 'NC-17',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/aPqcQwu4VGEewPhagWNncDbJ9Xp.jpg',
            'genre_id' => $genre->where('name', 'Horror')->first()->id,
        ]);

        // Romance Movies
        Movie::create([
            // 26 The Notebook
            'title' => 'The Notebook',
            'description' => 'An epic love story centered around an older man who reads aloud to a woman with Alzheimer\'s. From a faded notebook, the old man\'s words bring to life the story about a couple who is separated by World War II, and is then passionately reunited, seven years later, after they have taken different paths.',
            'duration' => 123,
            'release_date' => '2004-06-25',
            'rating' => 8,
            'maturity_rating' => 'PG-13',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/rNzQyW4f8B8cQeg7Dgj3n6eT5k9.jpg',
            'genre_id' => $genre->where('name', 'Romance')->first()->id,
        ]);
        Movie::create([
            // 27 Titanic
            'title' => 'Titanic',
            'description' => '101-year-old Rose DeWitt Bukater tells the story of her life aboard the Titanic, 84 years later. A young Rose boards the ship with her mother and fiancé. Meanwhile, Jack Dawson and Fabrizio De Rossi win third-class tickets aboard the ship. Rose tells the whole story from Titanic\'s departure through to its death—on its first and last voyage—on April 15, 1912.',
            'duration' => 194,
            'release_date' => '1998-01-05',
            'rating' => 8,
            'maturity_rating' => 'PG-13',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/9xjZS2rlVxm8SFx8kPC3aIGCOYQ.jpg',
            'genre_id' => $genre->where('name', 'Romance')->first()->id,
        ]);
        Movie::create([
            // 28 Beauty and the Beast
            'title' => 'Beauty and the Beast',
            'description' => 'A live-action adaptation of Disney\'s version of the classic tale of a cursed prince and a beautiful young woman who helps him break the spell.',
            'duration' => 129,
            'release_date' => '2017-03-17',
            'rating' => 7,
            'maturity_rating' => 'PG',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/hKegSKIDep2ewJWPUQD7u0KqFIp.jpg',
            'genre_id' => $genre->where('name', 'Romance')->first()->id,
        ]);
        Movie::create([
            // 29 After Everything
            'title' => 'After Everything',
            'description' => 'Besieged by writer’s block and the crushing breakup with Tessa, Hardin travels to Portugal in search of a woman he wronged in the past – and to find himself. Hoping to win back Tessa, he realizes he needs to change his ways before he can make the ultimate commitment.',
            'duration' => 93,
            'release_date' => '2023-09-13',
            'rating' => 7,
            'maturity_rating' => 'R',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/uQxjZGU6rxSPSMeAJPJQlmfV3ys.jpg',
            'genre_id' => $genre->where('name', 'Romance')->first()->id,
        ]);
        Movie::create([
            // 30 Me Before You
            'title' => 'Me Before You',
            'description' => 'A small town girl is caught between dead-end jobs. A high-profile, successful man becomes wheelchair bound following an accident. The man decides his life is not worth living until the girl is hired for six months to be his new caretaker. Worlds apart and trapped together by circumstance, the two get off to a rocky start. But the girl becomes determined to prove to the man that life is worth living and as they embark on a series of adventures together, each finds their world changing in ways neither of them could begin to imagine.',
            'duration' => 110,
            'release_date' => '2016-08-27',
            'rating' => 8,
            'maturity_rating' => 'PG-13',
            'language' => 'English',
            'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/Ia3dzj5LnCj1ZBdlVeJrbKJQxG.jpg',
            'genre_id' => $genre->where('name', 'Romance')->first()->id,
        ]);
    }
}

