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
        Actor::create([
            'name' => 'Elijah Wood',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/7UKRbJBNG7mxBl2QQc5XsAh6F8B.jpg'
        ]);
        Actor::create([
            'name' => 'Sean Astin',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/5oJzy6Ra0tuMEV7mfxjtqye5qUX.jpg'
        ]);
        Actor::create([
            'name' => 'Ian McKellen',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/coWjgMEYJjk2OrNddlXCBm8EIr3.jpg'
        ]);
        Actor::create([
            'name' => 'Viggo Mortensen',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/vH5gVSpHAMhDaFWfh0Q7BG61O1y.jpg'
        ]);
        Actor::create([
            'name' => 'Clint Eastwood',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/dU35NnjZ4aGw5abIJe3WXVf3Eey.jpg'
        ]);
        Actor::create([
            'name' => 'Eli Wallach',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/880EvYjyIG9BcrM3Jfof0QofmRe.jpg'
        ]);
        Actor::create([
            'name' => 'Lee Van Cleef',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/yQc5wjNCdRZzPp5E2wRPRYsEq9a.jpg'
        ]);
        Actor::create([
            'name' => 'Aldo Giuffrè',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/aT6eECl1R3YGYL4KatyIQrq0zG8.jpg'
        ]);
        Actor::create([
            'name' => 'Jonah Hill',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/hoise4R82zsMdxhy0nIuwaR8tdh.jpg'
        ]);
        Actor::create([
            'name' => 'Michael Cera',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/lFKyW2C7xj7X4nWpOEbVIDGOKrH.jpg'
        ]);
        Actor::create([
            'name' => 'Christopher Mintz-Plasse',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/c0F9poXsVicoiVQZ9jpau2upxOw.jpg'
        ]);
        Actor::create([
            'name' => 'Bill Hader',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/50FpKsWiyqbZxu0oLBAGbWn7wag.jpg'
        ]);
        Actor::create([
            'name' => 'Bradley Cooper',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/33isXOQ7RH6ca2nJgvLm4Fs7ZWL.jpg'
        ]);
        Actor::create([
            'name' => 'Ed Helms',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/gPZ8tZaNQGAc3KZRIPp9rgGbEnN.jpg'
        ]);
        Actor::create([
            'name' => 'Zach Galifianakis',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/qsDfoUlRnXHUiqZeBPWHzmgmKGX.jpg'
        ]);
        Actor::create([
            'name' => 'Justin Bartha',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/AalKjN8nR8RZ8g6ZdWV2smnQq4d.jpg'
        ]);
        Actor::create([
            'name' => 'Margot Robbie',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/euDPyqLnuwaWMHajcU3oZ9uZezR.jpg'
        ]);
        Actor::create([
            'name' => 'Ryan Gosling',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/lyUyVARQKhGxaxy0FbPJCQRpiaW.jpg'
        ]);
        Actor::create([
            'name' => 'America Ferrera',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/dhiUliLE7dFaqj5BKNQ6x7Wm9uR.jpg'
        ]);
        Actor::create([
            'name' => 'Kate McKinnon',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/2cNetzianFcxPQbyOQnkAIkKUZE.jpg'
        ]);
        Actor::create([
            'name' => 'Antonio Banderas',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/n8YlGookYzgD3cmpMP45BYRNIoh.jpg'
        ]);
        Actor::create([
            'name' => 'Salma Hayek Pinault',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/u4AR1MJnanaauWcQrzV15UyABb3.jpg'
        ]);
        Actor::create([
            'name' => 'Harvey Guillén',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/yiNBonobPwqMVweB02JWufzp2l9.jpg'
        ]);
        Actor::create([
            'name' => 'Wagner Moura',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/yJjV1ZCQbCSSgRy05FncCKjyaY4.jpg'
        ]);
        Actor::create([
            'name' => 'Anna Faris',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/y3YKNr4qPPJZ9w4lR2a3yySKotd.jpg'
        ]);
        Actor::create([
            'name' => 'Jon Abrahams',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/lB4qv4fTjP02m7w19TFXc29yLUd.jpg'
        ]);
        Actor::create([
            'name' => 'Marlon Wayans',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/8IsUn3C19U9b7VtLvUDMfMVnhWG.jpg'
        ]);
        Actor::create([
            'name' => 'Shawn Wayans',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/Cat25uXhB680QLmvg9Tu16W563.jpg'
        ]);
        Actor::create([
            'name' => 'Tim Robbins',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/A4fHNLX73EQs78f2G6ObfKZnvp4.jpg'
        ]);
        Actor::create([
            'name' => 'Morgan Freeman',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/jPsLqiYGSofU4s6BjrxnefMfabb.jpg'
        ]);
        Actor::create([
            'name' => 'Bob Gunton',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/rr2KDCKK4t0f5YhZibCpLCAsJxc.jpg'
        ]);
        Actor::create([
            'name' => 'William Sadler',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/rWeb2kjYCA7V9MC9kRwRpm57YoY.jpg'
        ]);
        Actor::create([
            'name' => 'Tom Hanks',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/xndWFsBlClOJFRdhSt4NBwiPq2o.jpg'
        ]);
        Actor::create([
            'name' => 'Robin Wright',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/hpx0mJQrusrOWG78LHveL8NT2iV.jpg'
        ]);
        Actor::create([
            'name' => 'Gary Sinise',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ngYV91xYfCu0JNcSxJ4yQ7tzOna.jpg'
        ]);
        Actor::create([
            'name' => 'Sally Field',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/5fBK36MdmdwQQMuP0W70rXADXih.jpg'
        ]);
        Actor::create([
            'name' => 'Cillian Murphy',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/llkbyWKwpfowZ6C8peBjIV9jj99.jpg'
        ]);
        Actor::create([
            'name' => 'Emily Blunt',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/nPJXaRMvu1vh3COG16GzmdsBySQ.jpg'
        ]);
        Actor::create([
            'name' => 'Matt Damon',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/aCvBXTAR9B1qRjIRzMBYhhbm1fR.jpg'
        ]);
        Actor::create([
            'name' => 'Robert Downey Jr.',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/im9SAqJPZKEbVZGmjXuLI4O7RvM.jpg'
        ]);
        Actor::create([
            'name' => 'Matthew McConaughey',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/e9ZHRY5toiBZCIPEEyvOG9A8ers.jpg'
        ]);
        Actor::create([
            'name' => 'Anne Hathaway',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/s6tflSD20MGz04ZR2R1lZvhmC4Y.jpg'
        ]);
        Actor::create([
            'name' => 'Jessica Chastain',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/9bVDmu6r5PYc4xhgs5vtUQr9yUw.jpg'
        ]);
        Actor::create([
            'name' => 'Harrison Ford',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/zVnHagUvXkR2StdOtquEwsiwSVt.jpg'
        ]);
        Actor::create([
            'name' => 'Ana de Armas',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/3vxvsmYLTf4jnr163SUlBIw51ee.jpg'
        ]);
        Actor::create([
            'name' => 'Sylvia Hoeks',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/envfC7U1yPkjP6bQidyfCVPzyJu.jpg'
        ]);
        Actor::create([
            'name' => 'Marlon Brando',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/fuTEPMsBtV1zE98ujPONbKiYDc2.jpg'
        ]);
        Actor::create([
            'name' => 'Al Pacino',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/2dGBb1fOcNdZjtQToVPFxXjm4ke.jpg'
        ]);
        Actor::create([
            'name' => 'James Caan',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/v3flJtQEyczxENi29yJyvnN6LVt.jpg'
        ]);
        Actor::create([
            'name' => 'Robert Duvall',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/86rJfMFHBB9J4mUHomSPsOLH0Za.jpg'
        ]);
        Actor::create([
            'name' => 'Diane Keaton',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/siSWRRFN9uO6iCN7y9OrHU5IaJ.jpg'
        ]);
        Actor::create([
            'name' => 'Robert De Niro',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/7v2srE6gWIFPeazyDAw1hAbcuWW.jpg'
        ]);
        Actor::create([
            'name' => 'Albert Brooks',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/8iDSGu5l93N7benjf6b3AysBore.jpg'
        ]);
        Actor::create([
            'name' => 'Ellen DeGeneres',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/z8IEEid4z63CBlJtxrTKEfsW7NA.jpg'
        ]);
        Actor::create([
            'name' => 'Alexander Gould',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/fe4mUSp0XotA6Ku4Bs69Q9o2lqU.jpg'
        ]);
        Actor::create([
            'name' => 'Willem Dafoe',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ui8e4sgZAwMPi3hzEO53jyBJF9B.jpg'
        ]);
        Actor::create([
            'name' => 'Chiwetel Ejiofor',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/kq5DDnqqofoRI0t6ddtRlsJnNPT.jpg'
        ]);
        Actor::create([
            'name' => 'John Oliver',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/wI7LRInWUT3RgCByYx69wRMqgsy.jpg'
        ]);
        Actor::create([
            'name' => 'James Earl Jones',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/oqMPIsXrl9SZkRfIKN08eFROmH6.jpg'
        ]);
        Actor::create([
            'name' => 'John Kani',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/g7tqg3q128a5O2qXMCwVnXsow9I.jpg'
        ]);
        Actor::create([
            'name' => 'Craig T. Nelson',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/rMh8qdexFKmc7mq7oLzsLLvCCjs.jpg'
        ]);
        Actor::create([
            'name' => 'Holly Hunter',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/kC7KX03VAWvogOCuwKbMo4V6TuU.jpg'
        ]);
        Actor::create([
            'name' => 'Sarah Vowell',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/7jWxVRciFDGPOBUOU2Rc7vc6A89.jpg'
        ]);
        Actor::create([
            'name' => 'Spencer Fox',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/vMyWK5qZWEG0GZh4FXCDXx4Jqfm.jpg'
        ]);
        Actor::create([
            'name' => 'Patrick Wilson',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/tc1ezEfIY8BhCy85svOUDtpBFPt.jpg'
        ]);
        Actor::create([
            'name' => 'Vera Farmiga',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/zpdjQwP68TCVjg4eumyPSi3Z13p.jpg'
        ]);
        Actor::create([
            'name' => 'Lili Taylor',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/if8rbaj1TXlzg0Oq4g0bpU3b5rh.jpg'
        ]);
        Actor::create([
            'name' => 'Ron Livingston',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/pr5CjWnkaf5WKTIYh8wtNufjmyb.jpg'
        ]);
        Actor::create([
            'name' => 'Tobin Bell',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/q21uuCtTioIVcGc3a1Q0DpdcNMO.jpg'
        ]);
        Actor::create([
            'name' => 'Shawnee Smith',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/s2Ouz4b7xqDH72aU48TSW5zS40v.jpg'
        ]);
        Actor::create([
            'name' => 'Synnøve Macody Lund',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/a5r4MtoL5jU4DtCp0BtzwEAtfyL.jpg'
        ]);
        Actor::create([
            'name' => 'Steven Brand',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/oWkitw5jzILwb775CVGjsqMSrqz.jpg'
        ]);
        Actor::create([
            'name' => 'Lily Sullivan',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/sLjxpxV2JX8k3k9VWoIPrzqlh5J.jpg'
        ]);
        Actor::create([
            'name' => 'Alyssa Sutherland',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/femjkNZ7jTbcwz6LjoQQyRD5Mlc.jpg'
        ]);
        Actor::create([
            'name' => 'Morgan Davies',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/fVApDiO0yWZZfQeprxDDfAukngO.jpg'
        ]);
        Actor::create([
            'name' => 'Gabrielle Echols',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/1f7Yk5VU2NsY5hZ4cqf4PxnZqdd.jpg'
        ]);
        Actor::create([
            'name' => 'Taissa Farmiga',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/kC2Movbs6uEF8DdDhvyHizQHuru.jpg'
        ]);
        Actor::create([
            'name' => 'Demián Bichir',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/sw8TqPQLbMMgLbkNNUIW649THWJ.jpg'
        ]);
        Actor::create([
            'name' => 'Bonnie Aarons',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/iEtWuoXKx4ZKbIWwJp1V76Heavy.jpg'
        ]);
        Actor::create([
            'name' => 'Jonas Bloquet',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/pzQAv6ghx5hc4gSpxHII0oUzqkL.jpg'
        ]);
        Actor::create([
            'name' => 'Sosie Bacon',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/hMsjirweIK9wGuy49l52b8SnLuv.jpg'
        ]);
        Actor::create([
            'name' => 'Kyle Gallner',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/v7wfYXfakHyeNudiATORtlQ6mny.jpg'
        ]);
        Actor::create([
            'name' => 'Caitlin Stasey',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/uJW62qSjIyI0OP30s5U8KLlDw32.jpg'
        ]);
        Actor::create([
            'name' => 'Jessie T. Usher',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/igRE9td7cO3j8YFMO7t1QrHYFxG.jpg'
        ]);
        Actor::create([
            'name' => 'Rachel McAdams',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/oxhG2XVJpC2tqKcNR3wfAvh71mT.jpg'
        ]);
        Actor::create([
            'name' => 'Gena Rowlands',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/7Hda4UFbmpufKnk48KpBuH7j05j.jpg'
        ]);
        Actor::create([
            'name' => 'James Garner',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/hiPky3VwIOAlmPhJwzRovEsGDrI.jpg'
        ]);
        Actor::create([
            'name' => 'Leonardo DiCaprio',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/wo2hJpn04vbtmh0B9utCFdsQhxM.jpg'
        ]);
        Actor::create([
            'name' => 'Kate Winslet',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/zIiU5mOcinbkpHWCxuDigucsyZC.jpg'
        ]);
        Actor::create([
            'name' => 'Billy Zane',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/9HIubetYWAVLlHNb9aObL0fc0sT.jpg'
        ]);
        Actor::create([
            'name' => 'Kathy Bates',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/3MsayDvY73uXGVbCFHyy1ABTacV.jpg'
        ]);
        Actor::create([
            'name' => 'Emma Watson',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/tvPPRGzAzdQFhlKzLbMO1EpuTJI.jpg'
        ]);
        Actor::create([
            'name' => 'Dan Stevens',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/fFsgginZKH527o38ZfdDxuzx7Ew.jpg'
        ]);
        Actor::create([
            'name' => 'Luke Evans',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/qUkYJcrDc4M0LHNYASs30luFvw0.jpg'
        ]);
        Actor::create([
            'name' => 'Josh Gad',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/17iKlfWZBDTAucqjkhRKHr9xjIz.jpg'
        ]);
        Actor::create([
            'name' => 'Hero Fiennes Tiffin',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/vNdScND38ytcV4tKEdu3cnGZgSe.jpg'
        ]);
        Actor::create([
            'name' => 'Josephine Langford',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/rxQIrvUN1NGHkqSKHug1hoHTUNi.jpg'
        ]);
        Actor::create([
            'name' => 'Mimi Keene',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/7bUgfaycm0f6PgEn3eLo8oANByO.jpg'
        ]);
        Actor::create([
            'name' => 'Stephen Moyer',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/xprwOCXa2cNkjhrGtcJp0VfJMlZ.jpg'
        ]);
        Actor::create([
            'name' => 'Emilia Clarke',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/wb8VfDPGpyqcFltnRcJR1Wj3h4Z.jpg'
        ]);
        Actor::create([
            'name' => 'Sam Claflin',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/e5CU4tjCNZFfm7ITmZfzjZse2Bb.jpg'
        ]);
        Actor::create([
            'name' => 'Janet McTeer',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/qOKAI6aunD4J5MXiwwomAhI3jI2.jpg'
        ]);
        Actor::create([
            'name' => 'Charles Dance',
            'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/2T2tH6EJjgP8aGevWogwfYr26QQ.jpg'
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
        $movie = Movie::find(1);
        $movie->actors()->attach([
            Actor::where('name', 'Christian Bale')->first()->id,
            Actor::where('name', 'Heath Ledger')->first()->id,
            Actor::where('name', 'Michael Caine')->first()->id,
            Actor::where('name', 'Gary Oldman')->first()->id,
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
        $movie = Movie::find(2);
        $movie->actors()->attach([
            Actor::where('name', 'Keanu Reeves')->first()->id,
            Actor::where('name', 'Michael Nyqvist')->first()->id,
            Actor::where('name', 'Ian McShane')->first()->id,
            Actor::where('name', 'John Leguizamo')->first()->id,
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
        $movie = Movie::find(3);
        $movie->actors()->attach([
            Actor::where('name', 'Keanu Reeves')->first()->id,
            Actor::where('name', 'Laurence Fishburne')->first()->id,
            Actor::where('name', 'Carrie-Anne Moss')->first()->id,
            Actor::where('name', 'Hugo Weaving')->first()->id,
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
        $movie = Movie::find(4);
        $movie->actors()->attach([
            Actor::where('name', 'Elijah Wood')->first()->id,
            Actor::where('name', 'Sean Astin')->first()->id,
            Actor::where('name', 'Ian McKellen')->first()->id,
            Actor::where('name', 'Viggo Mortensen')->first()->id,
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
        $movie = Movie::find(5);
        $movie->actors()->attach([
            Actor::where('name', 'Clint Eastwood')->first()->id,
            Actor::where('name', 'Eli Wallach')->first()->id,
            Actor::where('name', 'Lee Van Cleef')->first()->id,
            Actor::where('name', 'Aldo Giuffrè')->first()->id,
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
        $movie = Movie::find(6);
        $movie->actors()->attach([
            Actor::where('name', 'Jonah Hill')->first()->id,
            Actor::where('name', 'Michael Cera')->first()->id,
            Actor::where('name', 'Christopher Mintz-Plasse')->first()->id,
            Actor::where('name', 'Bill Hader')->first()->id,
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
        $movie = Movie::find(7);
        $movie->actors()->attach([
            Actor::where('name', 'Bradley Cooper')->first()->id,
            Actor::where('name', 'Ed Helms')->first()->id,
            Actor::where('name', 'Zach Galifianakis')->first()->id,
            Actor::where('name', 'Justin Bartha')->first()->id,
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
        $movie = Movie::find(8);
        $movie->actors()->attach([
            Actor::where('name', 'Margot Robbie')->first()->id,
            Actor::where('name', 'Ryan Gosling')->first()->id,
            Actor::where('name', 'America Ferrera')->first()->id,
            Actor::where('name', 'Kate McKinnon')->first()->id,
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
        $movie = Movie::find(9);
        $movie->actors()->attach([
            Actor::where('name', 'Antonio Banderas')->first()->id,
            Actor::where('name', 'Salma Hayek Pinault')->first()->id,
            Actor::where('name', 'Harvey Guillén')->first()->id,
            Actor::where('name', 'Wagner Moura')->first()->id,
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
        $movie = Movie::find(10);
        $movie->actors()->attach([
            Actor::where('name', 'Anna Faris')->first()->id,
            Actor::where('name', 'Jon Abrahams')->first()->id,
            Actor::where('name', 'Marlon Wayans')->first()->id,
            Actor::where('name', 'Shawn Wayans')->first()->id,
        ]);

        // Drama Movies
        Movie::create([
            // 11 The Shawshank Redemption
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
        $movie = Movie::find(11);
        $movie->actors()->attach([
            Actor::where('name', 'Tim Robbins')->first()->id,
            Actor::where('name', 'Morgan Freeman')->first()->id,
            Actor::where('name', 'Bob Gunton')->first()->id,
            Actor::where('name', 'William Sadler')->first()->id,
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
        $movie = Movie::find(12);
        $movie->actors()->attach([
            Actor::where('name', 'Tom Hanks')->first()->id,
            Actor::where('name', 'Robin Wright')->first()->id,
            Actor::where('name', 'Gary Sinise')->first()->id,
            Actor::where('name', 'Sally Field')->first()->id,
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
        $movie = Movie::find(13);
        $movie->actors()->attach([
            Actor::where('name', 'Cillian Murphy')->first()->id,
            Actor::where('name', 'Emily Blunt')->first()->id,
            Actor::where('name', 'Matt Damon')->first()->id,
            Actor::where('name', 'Robert Downey Jr.')->first()->id,
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
        $movie = Movie::find(14);
        $movie->actors()->attach([
            Actor::where('name', 'Matthew McConaughey')->first()->id,
            Actor::where('name', 'Anne Hathaway')->first()->id,
            Actor::where('name', 'Jessica Chastain')->first()->id,
            Actor::where('name', 'Michael Caine')->first()->id,
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
        $movie = Movie::find(15);
        $movie->actors()->attach([
            Actor::where('name', 'Ryan Gosling')->first()->id,
            Actor::where('name', 'Harrison Ford')->first()->id,
            Actor::where('name', 'Ana de Armas')->first()->id,
            Actor::where('name', 'Sylvia Hoeks')->first()->id,
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
        $movie = Movie::find(16);
        $movie->actors()->attach([
            Actor::where('name', 'Marlon Brando')->first()->id,
            Actor::where('name', 'Al Pacino')->first()->id,
            Actor::where('name', 'James Caan')->first()->id,
            Actor::where('name', 'Robert Duvall')->first()->id,
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
        $movie = Movie::find(17);
        $movie->actors()->attach([
            Actor::where('name', 'Al Pacino')->first()->id,
            Actor::where('name', 'Robert Duvall')->first()->id,
            Actor::where('name', 'Diane Keaton')->first()->id,
            Actor::where('name', 'Robert De Niro')->first()->id,
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
        $movie = Movie::find(18);
        $movie->actors()->attach([
            Actor::where('name', 'Albert Brooks')->first()->id,
            Actor::where('name', 'Ellen DeGeneres')->first()->id,
            Actor::where('name', 'Alexander Gould')->first()->id,
            Actor::where('name', 'Willem Dafoe')->first()->id,
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
        $movie = Movie::find(19);
        $movie->actors()->attach([
            Actor::where('name', 'Chiwetel Ejiofor')->first()->id,
            Actor::where('name', 'John Oliver')->first()->id,
            Actor::where('name', 'James Earl Jones')->first()->id,
            Actor::where('name', 'John Kani')->first()->id,
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
        $movie = Movie::find(20);
        $movie->actors()->attach([
            Actor::where('name', 'Craig T. Nelson')->first()->id,
            Actor::where('name', 'Holly Hunter')->first()->id,
            Actor::where('name', 'Sarah Vowell')->first()->id,
            Actor::where('name', 'Spencer Fox')->first()->id,
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
        $movie = Movie::find(21);
        $movie->actors()->attach([
            Actor::where('name', 'Patrick Wilson')->first()->id,
            Actor::where('name', 'Vera Farmiga')->first()->id,
            Actor::where('name', 'Lili Taylor')->first()->id,
            Actor::where('name', 'Ron Livingston')->first()->id,
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
        $movie = Movie::find(22);
        $movie->actors()->attach([
            Actor::where('name', 'Tobin Bell')->first()->id,
            Actor::where('name', 'Shawnee Smith')->first()->id,
            Actor::where('name', 'Synnøve Macody Lund')->first()->id,
            Actor::where('name', 'Steven Brand')->first()->id,
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
        $movie = Movie::find(23);
        $movie->actors()->attach([
            Actor::where('name', 'Lily Sullivan')->first()->id,
            Actor::where('name', 'Alyssa Sutherland')->first()->id,
            Actor::where('name', 'Morgan Davies')->first()->id,
            Actor::where('name', 'Gabrielle Echols')->first()->id,
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
        $movie = Movie::find(24);
        $movie->actors()->attach([
            Actor::where('name', 'Taissa Farmiga')->first()->id,
            Actor::where('name', 'Demián Bichir')->first()->id,
            Actor::where('name', 'Bonnie Aarons')->first()->id,
            Actor::where('name', 'Jonas Bloquet')->first()->id,
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
        $movie = Movie::find(25);
        $movie->actors()->attach([
            Actor::where('name', 'Sosie Bacon')->first()->id,
            Actor::where('name', 'Kyle Gallner')->first()->id,
            Actor::where('name', 'Caitlin Stasey')->first()->id,
            Actor::where('name', 'Jessie T. Usher')->first()->id,
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
        $movie = Movie::find(26);
        $movie->actors()->attach([
            Actor::where('name', 'Rachel McAdams')->first()->id,
            Actor::where('name', 'Ryan Gosling')->first()->id,
            Actor::where('name', 'Gena Rowlands')->first()->id,
            Actor::where('name', 'James Garner')->first()->id,
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
        $movie = Movie::find(27);
        $movie->actors()->attach([
            Actor::where('name', 'Leonardo DiCaprio')->first()->id,
            Actor::where('name', 'Kate Winslet')->first()->id,
            Actor::where('name', 'Billy Zane')->first()->id,
            Actor::where('name', 'Kathy Bates')->first()->id,
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
        $movie = Movie::find(28);
        $movie->actors()->attach([
            Actor::where('name', 'Emma Watson')->first()->id,
            Actor::where('name', 'Dan Stevens')->first()->id,
            Actor::where('name', 'Luke Evans')->first()->id,
            Actor::where('name', 'Josh Gad')->first()->id,
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
        $movie = Movie::find(29);
        $movie->actors()->attach([
            Actor::where('name', 'Hero Fiennes Tiffin')->first()->id,
            Actor::where('name', 'Josephine Langford')->first()->id,
            Actor::where('name', 'Mimi Keene')->first()->id,
            Actor::where('name', 'Stephen Moyer')->first()->id,
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
        $movie = Movie::find(30);
        $movie->actors()->attach([
            Actor::where('name', 'Emilia Clarke')->first()->id,
            Actor::where('name', 'Sam Claflin')->first()->id,
            Actor::where('name', 'Janet McTeer')->first()->id,
            Actor::where('name', 'Charles Dance')->first()->id,
        ]);
    }
}