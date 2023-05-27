<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'id' => 1 ,
                'genre_id' => 1,
                'title' => 'Hospital Playlist',
                'photo' => 'HospitalPlaylistS1.jpg',
                'description' => 'Every day is extraordinary for five doctors and their patients inside a hospital, where birth, death and everything in between coexist.' , 
                'rating' => 5
            ] , 
            [
                'id' => 2 ,
                'genre_id' => 1,
                'title' => "I'm not a robot",
                'photo' => 'Imnotarobot.jpg',
                'description' => 'The prime shareholder of a financial firm is allergic to human contact, but his reclusive life is disrupted by a robot -- an entrepreneur in disguise.' , 
                'rating' => 4
            ] , 
            [
                'id' => 3 ,
                'genre_id' => 1,
                'title' => 'Weightlifting Fairy Kim Bok Joo',
                'photo' => 'weightliftingfairykimbok-joo.jpg',
                'description' => 'A competitive swimmer crosses paths with his childhood friend, a rising weight lifting star, and realizes that she has a secret crush on his cousin.' , 
                'rating' => 5
            ] , 
            [
                'id' => 4 ,
                'genre_id' => 1,
                'title' => 'Hometown Cha-Cha-Cha',
                'photo' => 'hometownchachacha.jpg',
                'description' => 'A big-city dentist opens up a practice in a close-knit seaside village, home to a charming jack-of-all-trades who is her polar opposite in every way.' , 
                'rating' => 5
            ] , 
            [
                'id' => 5 ,
                'genre_id' => 2,
                'title' => 'Avatar: The Last Airbender S1',
                'photo' => 'avatar.jpg',
                'description' => "Siblings Katara and Sokka wake young Aang from a long hibernation and learn he's an Avatar, whose air-bending powers can defeat the evil Fire Nation." , 
                'rating' => 5
            ],
            [
                'id' => 6 ,
                'genre_id' => 2,
                'title' => 'SpongeBob SquarePants S1',
                'photo' => 'spongebob.jpg',
                'description' => "From his pineapple home base under the sea, SpongeBob and his friends, including his meowing pet snail Gary, get into memorable misadventures." , 
                'rating' => 5
            ],
            [
                'id' => 7 ,
                'genre_id' => 2,
                'title' => 'BoBoiBoy',
                'photo' => 'boboiboy.jpg',
                'description' => "Together with his friends, a boy with elemental superpowers fights off cocoa-obsessed aliens who want to conquer the planet." , 
                'rating' => 5
            ],
            [
                'id' => 8 ,
                'genre_id' => 2,
                'title' => 'Pororo - The Little Penguin',
                'photo' => 'pororo.jpg',
                'description' => "On a tiny island, Pororo the penguin has fun adventures with his friends Eddy the fox, Loopy the beaver, Poby the polar bear and Crong the dinosaur." , 
                'rating' => 5
            ],
            [
                'id' => 9 ,
                'genre_id' => 3,
                'title' => 'Stranger Things',
                'photo' => 'strangerthings.jpg',
                'description' => "When a young boy vanishes, a small town uncovers a mystery involving secret experiments, terrifying supernatural forces and one strange little girl." , 
                'rating' => 5
            ],
            [
                'id' => 10 ,
                'genre_id' => 3,
                'title' => 'The Good Doctor',
                'photo' => 'thegooddoctor.jpg',
                'description' => "A talented surgeon with autism and savant syndrome joins a prestigious hospital, where he faces skepticism from both the patients and staff." , 
                'rating' => 5
            ],
            [
                'id' => 11 ,
                'genre_id' => 3,
                'title' => 'Peaky Blinders',
                'photo' => 'peakyblinders.jpg',
                'description' => "A notorious gang in 1919 Birmingham, England, is led by the fierce Tommy Shelby, a crime boss set on moving up in the world no matter the cost." , 
                'rating' => 5
            ],
            [
                'id' => 12 ,
                'genre_id' => 3,
                'title' => 'Money Heist',
                'photo' => 'moneyheist.jpg',
                'description' => "Eight thieves take hostages and lock themselves in the Royal Mint of Spain as a criminal mastermind manipulates the police to carry out his plan." , 
                'rating' => 5
            ]

        ]);
    }
}
