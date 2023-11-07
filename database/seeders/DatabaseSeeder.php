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
                'description' => 'The Shawshank Redemption is a 1994 American drama film written and directed by Frank Darabont, based on the 1982 Stephen King novella Rita Hayworth and Shawshank Redemption. It tells the story of banker Andy Dufresne (Tim Robbins), who is sentenced to life in Shawshank State Penitentiary for the murders of his wife and her lover, despite his claims of innocence. Over the following two decades, he befriends a fellow prisoner, contraband smuggler Ellis "Red" Redding (Morgan Freeman), and becomes instrumental in a money-laundering operation led by the prison warden Samuel Norton (Bob Gunton). William Sadler, Clancy Brown, Gil Bellows, and James Whitmore appear in supporting roles.',
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
                'description' => 'The Godfather is a 1972 American crime film directed by Francis Ford Coppola, who co-wrote the screenplay with Mario Puzo, based on Puzo\'s best-selling 1969 novel of the same name. The film stars Marlon Brando, Al Pacino, James Caan, Richard S. Castellano, Robert Duvall, Sterling Hayden, John Marley, Richard Conte, and Diane Keaton. It is the first installment in The Godfather trilogy. The story, spanning from 1945 to 1955, chronicles the Corleone family under patriarch Vito Corleone (Brando), focusing on the transformation of one of his sons, Michael Corleone (Pacino), from reluctant family outsider to ruthless mafia boss.',
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
                'description' => 'The Dark Knight is a 2008 superhero film directed by Christopher Nolan from a screenplay co-written with his brother Jonathan. Based on the DC Comics superhero Batman, it is the sequel to Batman Begins (2005) and the second installment in The Dark Knight Trilogy. The plot follows the vigilante Batman, police lieutenant James Gordon, and district attorney Harvey Dent, who form an alliance to dismantle organized crime in Gotham City. Their efforts are derailed by the Joker, an anarchistic mastermind who seeks to test how far the Batman will go to save the city from chaos.',
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
                'description' => 'John Wick is a 2014 American action thriller film directed by Chad Stahelski and written by Derek Kolstad. Keanu Reeves stars as John Wick, a legendary hitman who comes out of retirement to seek revenge against the men who killed his puppy, a final gift from his recently deceased wife',
                'duration' => '101',
                'release_date' => '2014-10-22',
                'rating' => 7,
                'maturity_rating' => 'R',
                'language' => 'English',
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/5vHssUeVe25bMrof1HyaPyWgaP.jpg',
                'genre_id' => $genre->where('name', 'Action')->first()->id,
            ],
            [
                'title' => 'The Matrix',
                'description' => 'The Matrix is a 1999 American science fiction action film written and directed by the Wachowskis, and produced by Joel Silver. It stars Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss, Hugo Weaving, and Joe Pantoliano and is the first installment in the Matrix franchise. It depicts a dystopian future in which humanity is unknowingly trapped inside a simulated reality, the Matrix, created by intelligent machines to distract humans while using their bodies as an energy source. When computer programmer Thomas Anderson, under the hacker alias "Neo", uncovers the truth, he "is drawn into a rebellion against the machines" along with other people who have been freed from the Matrix.',
                'duration' => '136',
                'release_date' => '1999-03-30',
                'rating' => 8,
                'maturity_rating' => 'R',
                'language' => 'English',
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/hEpWvX6Bp79eLxY1kX5ZZJcme5U.jpg',
                'genre_id' => $genre->where('name', 'Action')->first()->id,
            ],
            [
                'title' => 'The Godfather: Part II',
                'description' => 'The Godfather Part II is a 1974 American epic crime film produced and directed by Francis Ford Coppola from the screenplay co-written with Mario Puzo, starring Al Pacino, Robert Duvall, Diane Keaton, Robert De Niro, Talia Shire, Morgana King, John Cazale, Mariana Hill, and Lee Strasberg. It is the second installment in The Godfather trilogy. Partially based on Puzo\'s 1969 novel The Godfather, the film is both a sequel and a prequel to The Godfather, presenting parallel dramas: one picks up the 1958 story of Michael Corleone (Pacino), the new Don of the Corleone crime family, protecting the family business in the aftermath of an attempt on his life; the prequel covers the journey of his father, Vito Corleone (De Niro), from his Sicilian childhood to the founding of his family enterprise in New York City.',
                'duration' => '202',
                'release_date' => '1974-12-20',
                'rating' => 9,
                'maturity_rating' => 'R',
                'language' => 'English',
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/bVq65huQ8vHDd1a4Z37QtuyEvpA.jpg',
                'genre_id' => $genre->where('name', 'Family')->first()->id,
            ],
            [
                'title' => 'The Lord of the Rings: The Return of the King',
                'description' => 'The Lord of the Rings: The Return of the King is a 2003 epic fantasy adventure film directed by Peter Jackson, based on the third volume of J. R. R. Tolkien\'s The Lord of the Rings. The film is the final instalment in the Lord of the Rings trilogy and was produced by Barrie M. Osborne, Jackson and Fran Walsh, and written by Walsh, Philippa Boyens and Jackson. Continuing the plot of The Two Towers, Frodo, Sam and Gollum are making their final way toward Mount Doom in Mordor in order to destroy the One Ring, unaware of Gollum\'s true intentions, while Gandalf, Aragorn, Legolas, Gimli and the rest are joining forces together against Sauron and his legions in Minas Tirith.',
                'duration' => '201',
                'release_date' => '2003-12-01',
                'rating' => 8,
                'maturity_rating' => 'PG-13',
                'language' => 'English',
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/rCzpDGLbOoPwLjy3OAm5NUPOTrC.jpg',
                'genre_id' => $genre->where('name', 'Action')->first()->id,
            ],
            [
                'title' => 'The Good, the Bad and the Ugly',
                'description' => 'The Good, the Bad and the Ugly is a 1966 Italian epic Spaghetti Western film directed by Sergio Leone and starring Clint Eastwood as "the Good", Lee Van Cleef as "the Bad", and Eli Wallach as "the Ugly". Its screenplay was written by Age & Scarpelli, Luciano Vincenzoni and Leone (with additional screenplay material and dialogue provided by an uncredited Sergio Donati), based on a story by Vincenzoni and Leone. Director of photography Tonino Delli Colli was responsible for the film\'s sweeping widescreen cinematography, and Ennio Morricone composed the film\'s score, including its main theme. It is an Italian-led production with co-producers in Spain, West Germany and the United States.',
                'duration' => '161',
                'release_date' => '1966-12-23',
                'rating' => 8,
                'maturity_rating' => 'R',
                'language' => 'English',
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/4yJNQh4Z0lSprkyLKiVcCzrPZYp.jpg',
                'genre_id' => $genre->where('name', 'Action')->first()->id,
            ],
            [
                'title' => 'The Notebook',
                'description' => 'The Notebook is a 2004 romantic drama film directed by Nick Cassavetes and based on Nicholas Sparks\' 1996 novel of the same name. The film stars Ryan Gosling and Rachel McAdams as a young couple who fall in love in the early 1940s, but are separated by their social differences. They reunite seven years later, and the story follows their attempts to rekindle their relationship.',
                'duration' => '123',
                'release_date' => '2004-06-25',
                'rating' => 8,
                'maturity_rating' => 'PG-13',
                'language' => 'English',
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qM0BXEQjmnAzlkDZ0tYmV6twqMX.jpg',
                'genre_id' => $genre->where('name', 'Romance')->first()->id,
            ],
            [
                'title' => 'Superbad',
                'description' => 'Superbad is a 2007 teen comedy film directed by Greg Mottola and produced by Judd Apatow and Shauna Robertson. The film follows two high school friends, Seth and Evan, who are on a mission to lose their virginity before heading off to college. Along the way, they encounter various comedic misadventures.',
                'duration' => '113',
                'release_date' => '2007-08-17',
                'rating' => 7,
                'maturity_rating' => 'R',
                'language' => 'English',
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/2gs5ruIO6WljyOlqltaCj5Ufy8E.jpg',
                'genre_id' => $genre->where('name', 'Comedy')->first()->id,
            ],
            [
                'title' => 'The Conjuring',
                'description' => 'The Conjuring is a 2013 supernatural horror film directed by James Wan and based on the real-life investigations of paranormal investigators Ed and Lorraine Warren. The film follows the Warrens as they help a family terrorized by dark forces in their new home.',
                'duration' => '112',
                'release_date' => '2013-07-19',
                'rating' => 7,
                'maturity_rating' => 'R',
                'language' => 'English',
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/tGLO9zw5ZtCeyyEWgbYGgsFxC6i.jpg',
                'genre_id' => $genre->where('name', 'Horror')->first()->id,
            ],
            [
                'title' => 'Finding Nemo',
                'description' => 'Finding Nemo is a 2003 animated family film produced by Pixar Animation Studios and released by Walt Disney Pictures. The film tells the story of a clownfish named Marlin who embarks on a journey to find his son, Nemo, who has been captured by a diver and placed in a fish tank.',
                'duration' => '100',
                'release_date' => '2003-05-30',
                'rating' => 8,
                'maturity_rating' => 'G',
                'language' => 'English',
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/syPWyeeqzTQIxjIUaIFI7d0TyEY.jpg',
                'genre_id' => $genre->where('name', 'Family')->first()->id,
            ],
            [
                'title' => 'The Lion King',
                'description' => 'The Lion King is a 1994 American animated musical drama film produced by Walt Disney Feature Animation and released by Walt Disney Pictures. It is the 32nd Disney animated feature film, and the fifth animated film produced during a period known as the Disney Renaissance. The Lion King was directed by Roger Allers and Rob Minkoff, produced by Don Hahn, and has a screenplay credited to Irene Mecchi, Jonathan Roberts, and Linda Woolverton. Its original songs were written by composer Elton John and lyricist Tim Rice, with a score by Hans Zimmer. The film features an ensemble voice cast that includes Matthew Broderick, James Earl Jones, Jeremy Irons, Jonathan Taylor Thomas, Moira Kelly, Nathan Lane, Ernie Sabella, Rowan Atkinson, Robert Guillaume, Madge Sinclair, Whoopi Goldberg, Cheech Marin, and Jim Cummings. The story takes place in a kingdom of lions in Africa and was influenced by the Biblical stories of Joseph and Moses, and William Shakespeare\'s Hamlet.',
                'duration' => '89',
                'release_date' => '1994-06-23',
                'rating' => 8,
                'maturity_rating' => 'G',
                'language' => 'English',
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/2bXbqYdUdNVa8VIWXVfclP2ICtT.jpg',
                'genre_id' => $genre->where('name', 'Family')->first()->id,
            ],
            [
                'title' => 'The Hangover',
                'description' => 'The Hangover is a 2009 American comedy film directed by Todd Phillips, co-produced with Daniel Goldberg, and written by Jon Lucas and Scott Moore. It is the first installment in The Hangover trilogy. The film stars Bradley Cooper, Ed Helms, Zach Galifianakis, Heather Graham, Justin Bartha, Ken Jeong, and Jeffrey Tambor. It tells the story of Phil Wenneck, Stu Price, Alan Garner, and Doug Billings, who travel to Las Vegas for a bachelor party to celebrate Doug\'s impending marriage. However, Phil, Stu, and Alan wake up with Doug missing and no memory of the previous night\'s events, and must find the groom before the wedding can take',
                'duration' => '100',
                'release_date' => '2009-06-05',
                'rating' => 7,
                'maturity_rating' => 'R',
                'language' => 'English',
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/1w8dr5KuT2ZM7DZjFyUL7rRcMMx.jpg',
                'genre_id' => $genre->where('name', 'Comedy')->first()->id,
            ],
            [
                'title' => 'Forrest Gump',
                'description' => 'Forrest Gump is a 1994 drama film directed by Robert Zemeckis and based on the 1986 novel of the same name by Winston Groom. The film stars Tom Hanks as Forrest Gump, a man with a low IQ who inadvertently influences several significant historical events in the 20th century United States.',
                'duration' => '142',
                'release_date' => '1994-07-06',
                'rating' => 9,
                'maturity_rating' => 'PG-13',
                'language' => 'English',
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/yE5d3BUhE8hCnkMUJOo1QDoOGNz.jpg',
                'genre_id' => $genre->where('name', 'Drama')->first()->id,
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

