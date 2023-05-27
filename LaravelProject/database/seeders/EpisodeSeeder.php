<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            [
                'movie_id' => 1,
                'episode' => 1 , 
                'title' => "Lonely Night"
            ],
            [
                'movie_id' => 1,
                'episode' => 2 , 
                'title' => "Introduce me a Good Person"
            ],
            [
                'movie_id' => 1,
                'episode' => 3 , 
                'title' => "Aroha"
            ],
            [
                'movie_id' => 1,
                'episode' => 4 , 
                'title' => "Confession Is Not Flashy"
            ],
            [
                'movie_id' => 1,
                'episode' => 5 , 
                'title' => "Beautiful My Love"
            ],
            [
                'movie_id' => 1,
                'episode' => 6 , 
                'title' => "In Front of City Hall at the Subway Station"
            ],
            [
                'movie_id' => 1,
                'episode' => 7 , 
                'title' => "You Always"
            ],
            [
                'movie_id' => 1,
                'episode' => 8 , 
                'title' => "With my tears"
            ],
            [
                'movie_id' => 1,
                'episode' => 9 , 
                'title' => "The Wind is blowing"
            ],
            [
                'movie_id' => 1,
                'episode' => 10 , 
                'title' => "Beyond the Rainbow "
            ],
            [
                'movie_id' => 1,
                'episode' => 11 , 
                'title' => "Oh! What a Shiny Night"
            ],
            [
                'movie_id' => 1,
                'episode' => 12 , 
                'title' => "Canon"
            ],
            [
                'movie_id' => 1,
                'episode' => 13 , 
                'title' => "While Living Life"
            ],
            [
                'movie_id' => 1,
                'episode' => 14 , 
                'title' => "I Knew I Love"
            ],
            [
                'movie_id' => 1,
                'episode' => 15 , 
                'title' => "Me to You, You to Me"
            ],
            [
                'movie_id' => 1,
                'episode' => 16 , 
                'title' => "Last Episode"
            ],
            [
                'movie_id' => 2,
                'episode' => 1 , 
                'title' => "Android AG3"
            ],
            [
                'movie_id' => 2,
                'episode' => 2 , 
                'title' => "Lives of Ji-A, Min-Kyu, and Hong"
            ],
            [
                'movie_id' => 2,
                'episode' => 3 , 
                'title' => "Ji-A begins his training"
            ],
            [
                'movie_id' => 2,
                'episode' => 4 , 
                'title' => "Ji-A manages to inject Min-Kyu in time"
            ],
            [
                'movie_id' => 2,
                'episode' => 5 , 
                'title' => "The presence of AG3 managed to cure him."
            ],
            [
                'movie_id' => 2,
                'episode' => 6 , 
                'title' => "Min-Kyu chooses to show Baek-Gyun"
            ],
            [
                'movie_id' => 2,
                'episode' => 7 , 
                'title' => "Ji-A manages to steal Min-Kyu's first kiss"
            ],
            [
                'movie_id' => 2,
                'episode' => 8 , 
                'title' => "Min-Kyu starts to become cold"
            ],
            [
                'movie_id' => 2,
                'episode' => 9 , 
                'title' => "Min-Kyu suffers from his love"
            ],
            [
                'movie_id' => 2,
                'episode' => 10 , 
                'title' => "Min-Kyu and Ji-A share one final moment"
            ],
            [
                'movie_id' => 2,
                'episode' => 11 , 
                'title' => "Min-Kyu meets Ji-A and identifies her as AG3"
            ],
            [
                'movie_id' => 2,
                'episode' => 12 , 
                'title' => "Min-Kyu and Ji-A get locked in a cellar together"
            ],
            [
                'movie_id' => 2,
                'episode' => 13 , 
                'title' => "Min-Kyu is angry"
            ],
            [
                'movie_id' => 2,
                'episode' => 14 , 
                'title' => "Min-Kyu and Ji-A attempt to be honest "
            ],
            [
                'movie_id' => 2,
                'episode' => 15 , 
                'title' => "Min-Kyu manages to stop Do-Won's attack"
            ],
            [
                'movie_id' => 2,
                'episode' => 16 , 
                'title' => "Allergic to humans [END]"
            ],
            [
                'movie_id' => 3,
                'episode' => 1 , 
                'title' => "Weightlifting Fairy Kim Bok Joo"
            ],
            [
                'movie_id' => 3,
                'episode' => 2 , 
                'title' => "Chubby and Reverse Man Meet Again"
            ],
            [
                'movie_id' => 3,
                'episode' => 3 , 
                'title' => "Falling in love"
            ],
            [
                'movie_id' => 3,
                'episode' => 4 , 
                'title' => "The Reason behind a False Start"
            ],
            [
                'movie_id' => 3,
                'episode' => 5 , 
                'title' => "Dating with Lies"
            ],
            [
                'movie_id' => 3,
                'episode' => 6 , 
                'title' => "Joon-hyung's Challenge"
            ],
            [
                'movie_id' => 3,
                'episode' => 7 , 
                'title' => "Tearful Happy Birthday"
            ],
            [
                'movie_id' => 3,
                'episode' => 8 , 
                'title' => "A Roommates' Fight of love"
            ],
            [
                'movie_id' => 3,
                'episode' => 9 , 
                'title' => "A Vending Machine of Lies"
            ],
            [
                'movie_id' => 3,
                'episode' => 10 , 
                'title' => "Twisted Relationship"
            ],
            [
                'movie_id' => 3,
                'episode' => 11 , 
                'title' => "Heart's Day Off"
            ],
            [
                'movie_id' => 3,
                'episode' => 12 , 
                'title' => "Heart's Racing"
            ],
            [
                'movie_id' => 3,
                'episode' => 13 , 
                'title' => "Ex-Girlfriend's Jealousy"
            ],
            [
                'movie_id' => 3,
                'episode' => 14 , 
                'title' => "Secret Date"
            ],
            [
                'movie_id' => 3,
                'episode' => 15 , 
                'title' => "Meeting mom after ten years"
            ],
            [
                'movie_id' => 3,
                'episode' => 16 , 
                'title' => "To Believe in Love [END]"
            ],
            [
                'movie_id' => 4,
                'episode' => 1 , 
                'title' => "Episode 1"
            ],
            [
                'movie_id' => 4,
                'episode' => 2 , 
                'title' => "Episode 2"
            ],
            [
                'movie_id' => 4,
                'episode' => 3 , 
                'title' => "Episode 3"
            ],
            [
                'movie_id' => 4,
                'episode' => 4 , 
                'title' => "Episode 4"
            ],
            [
                'movie_id' => 4,
                'episode' => 5 , 
                'title' => "Episode 5"
            ],
            [
                'movie_id' => 4,
                'episode' => 6 , 
                'title' => "Episode 6"
            ],
            [
                'movie_id' => 4 ,
                'episode' => 7 , 
                'title' => "Episode 7"
            ],
            [
                'movie_id' => 4,
                'episode' => 8 , 
                'title' => "Episode 8"
            ],
            [
                'movie_id' => 4,
                'episode' => 9 , 
                'title' => "Episode 9"
            ],
            [
                'movie_id' => 4,
                'episode' => 10 , 
                'title' => "Episode 10"
            ],
            [
                'movie_id' => 4,
                'episode' => 11 , 
                'title' => "Episode 11"
            ],
            [
                'movie_id' => 4,
                'episode' => 12 , 
                'title' => "Episode 12"
            ],
            [
                'movie_id' => 4,
                'episode' => 13 , 
                'title' => "Episode 13"
            ],
            [
                'movie_id' => 4,
                'episode' => 14 , 
                'title' => "Episode 14"
            ],
            [
                'movie_id' => 4,
                'episode' => 15 , 
                'title' => "Episode 15"
            ],
            [
                'movie_id' => 4,
                'episode' => 16 , 
                'title' => "Episode 16 [END]"
            ],
            [
                'movie_id' => 5,
                'episode' => 1, 
                'title' => "The Boy in the Iceberg"
            ],
            [
                'movie_id' => 5,
                'episode' => 2 , 
                'title' => "The Avatar Returns"
            ],
            [
                'movie_id' => 5,
                'episode' =>  3, 
                'title' => "The Southern Air Temple"
            ],
            [
                'movie_id' => 5,
                'episode' =>  4, 
                'title' => "The Warriors of Kiyoshi"
            ],
            [
                'movie_id' => 5,
                'episode' => 5, 
                'title' => "The King of Omashu"
            ],
            [
                'movie_id' => 5,
                'episode' => 6, 
                'title' => "Imprisoned"
            ],
            [
                'movie_id' => 5,
                'episode' => 7, 
                'title' => "Winter Solstice Part 1"
            ],
            [
                'movie_id' => 5,
                'episode' => 8, 
                'title' => "Winter Solstice Part 2"
            ],
            [
                'movie_id' => 5,
                'episode' => 9, 
                'title' => "The Waterbending Scroll"
            ],
            [
                'movie_id' => 5,
                'episode' => 10, 
                'title' => "Jet"
            ],
            [
                'movie_id' => 5,
                'episode' => 11, 
                'title' => "The Great Divide"
            ],
            [
                'movie_id' => 5,
                'episode' => 12, 
                'title' => "The Storm"
            ],
            [
                'movie_id' => 5,
                'episode' => 13, 
                'title' => "The Blue Spirit"
            ],
            [
                'movie_id' => 5,
                'episode' => 14, 
                'title' => "The Fortune Teller"
            ],
            [
                'movie_id' => 5,
                'episode' => 15, 
                'title' => "Bato of the Water Tribe"
            ],
            [
                'movie_id' => 5,
                'episode' => 16, 
                'title' => "The Deserter"
            ],
            [
                'movie_id' => 5,
                'episode' => 17, 
                'title' => "The Northern Air Temple"
            ],
            [
                'movie_id' => 5,
                'episode' => 18, 
                'title' => "The Waterbending Master"
            ],
            [
                'movie_id' => 5,
                'episode' => 19, 
                'title' => "The Siege of the North"
            ],
            [
                'movie_id' => 6,
                'episode' => 1, 
                'title' => "Tree at the Treedome"
            ],
            [
                'movie_id' => 6,
                'episode' => 2, 
                'title' => "Bubblestand"
            ],
            [
                'movie_id' => 6,
                'episode' => 3, 
                'title' => "Jellyfishing"
            ],
            [
                'movie_id' => 6,
                'episode' => 4, 
                'title' => "Boating School"
            ],
            [
                'movie_id' => 6,
                'episode' => 5, 
                'title' => "Pizza Delivery"
            ],
            [
                'movie_id' => 6,
                'episode' => 6, 
                'title' => "Pickles"
            ],
            [
                'movie_id' => 6,
                'episode' => 7, 
                'title' => "Jellyfish Jam"
            ],
            [
                'movie_id' => 6,
                'episode' => 8, 
                'title' => "Squeaky Boots"
            ],
            [
                'movie_id' => 6,
                'episode' => 9, 
                'title' => "Nature Pants"
            ],
            [
                'movie_id' => 6,
                'episode' => 10, 
                'title' => "F.U.N."
            ],
            [
                'movie_id' => 6,
                'episode' => 11, 
                'title' => "Squidward, The unfriendly ghost"
            ],
            [
                'movie_id' => 6,
                'episode' => 12, 
                'title' => "Employee of the Month"
            ],
            [
                'movie_id' => 6,
                'episode' => 13, 
                'title' => "Teenager Gary"
            ],
            [
                'movie_id' => 6,
                'episode' => 14, 
                'title' => "Karate Choppers"
            ],
            [
                'movie_id' => 6,
                'episode' => 15, 
                'title' => "Suds"
            ],
            [
                'movie_id' => 6,
                'episode' => 16, 
                'title' => "The Paper"
            ],
            [
                'movie_id' => 6,
                'episode' => 17, 
                'title' => "Rock Bottom"
            ],
            [
                'movie_id' => 6,
                'episode' => 18, 
                'title' => "Texas"
            ],
            [
                'movie_id' => 6,
                'episode' => 19, 
                'title' => "Fool's in April"
            ],
            [
                'movie_id' => 6,
                'episode' => 20, 
                'title' => "Hooky"
            ],
            [
                'movie_id' => 7,
                'episode' => 1, 
                'title' => "The Rise of BoBoiBoy"
            ],
            [
                'movie_id' => 7,
                'episode' => 2, 
                'title' => "Adu Du Attacks"
            ],
            [
                'movie_id' => 7,
                'episode' => 3, 
                'title' => "The Multi Monster"
            ],
            [
                'movie_id' => 7,
                'episode' => 4, 
                'title' => "Team BoBoiBoy"
            ],
            [
                'movie_id' => 7,
                'episode' => 5, 
                'title' => "BoBoiBoy's Weakness"
            ],
            [
                'movie_id' => 7,
                'episode' => 6, 
                'title' => "A New Form Awakens"
            ],
            [
                'movie_id' => 7,
                'episode' => 7, 
                'title' => "Game On!"
            ],
            [
                'movie_id' => 7,
                'episode' => 8, 
                'title' => "The Dream World"
            ],
            [
                'movie_id' => 7,
                'episode' => 9, 
                'title' => "Checkers"
            ],
            [
                'movie_id' => 7,
                'episode' => 10, 
                'title' => "BoBoiBoy Fan Mails"
            ],
            [
                'movie_id' => 7,
                'episode' => 11, 
                'title' => "Cookie Casuality"
            ],
            [
                'movie_id' => 7,
                'episode' => 12, 
                'title' => "BoBoiBoy Cyclone"
            ],
            [
                'movie_id' => 7,
                'episode' => 13, 
                'title' => "Season Finale"
            ],
            [
                'movie_id' => 7,
                'episode' => 14, 
                'title' => "Extended Finale [END]"
            ],
            [
                'movie_id' => 8,
                'episode' => 1, 
                'title' => "We are friends"
            ],
            [
                'movie_id' => 8,
                'episode' => 2, 
                'title' => "It's Alright"
            ],
            [
                'movie_id' => 8,
                'episode' => 3, 
                'title' => "Ice Fishing"
            ],
            [
                'movie_id' => 8,
                'episode' => 4, 
                'title' => "Smile,Smile,Smile"
            ],
            [
                'movie_id' => 8,
                'episode' => 5, 
                'title' => "What happened to my face"
            ],
            [
                'movie_id' => 8,
                'episode' => 6, 
                'title' => "Poby Insome"
            ],
            [
                'movie_id' => 8,
                'episode' => 7, 
                'title' => "Achoo, I Got a Cold"
            ],
            [
                'movie_id' => 8,
                'episode' => 8, 
                'title' => "Stomach Ache"
            ],
            [
                'movie_id' => 8,
                'episode' => 9, 
                'title' => "Treasure Hunting"
            ],
            [
                'movie_id' => 8,
                'episode' => 10, 
                'title' => "Crong the Troublemaker"
            ],
            [
                'movie_id' => 8,
                'episode' => 11, 
                'title' => "Who Touched my Snowman? "
            ],
            [
                'movie_id' => 8,
                'episode' => 12, 
                'title' => "Let's Play Together"
            ],
            [
                'movie_id' => 8,
                'episode' => 13, 
                'title' => "Pororo Surprise Party"
            ],
            [
                'movie_id' => 8,
                'episode' => 14, 
                'title' => "Eddy's Secret"
            ],
            [
                'movie_id' => 8,
                'episode' => 15, 
                'title' => "Be Careful"
            ],
            [
                'movie_id' => 8,
                'episode' => 16, 
                'title' => "Dream of Flying [END]"
            ],
            [
                'movie_id' => 9,
                'episode' => 1, 
                'title' => "Chapter One: The Vanishing of Will Byers"
            ],
            [
                'movie_id' => 9,
                'episode' => 2, 
                'title' => "Chapter Two: The Weirdo on Maple Street"
            ],
            [
                'movie_id' => 9,
                'episode' => 3, 
                'title' => "Chapter Three: Holly, Jolly"
            ],
            [
                'movie_id' => 9,
                'episode' => 4, 
                'title' => "Chapter Four: The Body"
            ],
            [
                'movie_id' => 9,
                'episode' => 5, 
                'title' => "Chapter Five: The Flea and the Acrobat"
            ],
            [
                'movie_id' => 9,
                'episode' => 6, 
                'title' => "Chapter Six: The Monster"
            ],
            [
                'movie_id' => 9,
                'episode' => 7, 
                'title' => "Chapter Seven: The Bathtub"
            ],
            [
                'movie_id' => 9,
                'episode' => 8, 
                'title' => "Chapter Eight: The Upside Down"
            ],
            [
                'movie_id' => 10,
                'episode' => 1, 
                'title' => "Burnt Food"
            ],
            [
                'movie_id' => 10,
                'episode' => 2, 
                'title' => "Mount Rushmore"
            ],
            [
                'movie_id' => 10,
                'episode' => 3, 
                'title' => "Oliver"
            ],
            [
                'movie_id' => 10,
                'episode' => 4, 
                'title' => "Pipes"
            ],
            [
                'movie_id' => 10,
                'episode' => 5, 
                'title' => "Point Three Percent"
            ],
            [
                'movie_id' => 10,
                'episode' => 6, 
                'title' => "Not Fake"
            ],
            [
                'movie_id' => 10,
                'episode' => 7, 
                'title' => "22 Steps"
            ],
            [
                'movie_id' => 10,
                'episode' => 8, 
                'title' => "Apple"
            ],
            [
                'movie_id' => 10,
                'episode' => 9, 
                'title' => "Intangibles"
            ],
            [
                'movie_id' => 10,
                'episode' => 10, 
                'title' => "Sacrifices"
            ],
            [
                'movie_id' => 10,
                'episode' => 11, 
                'title' => "Islands Part One"
            ],
            [
                'movie_id' => 10,
                'episode' => 12, 
                'title' => "Islands Part Two"
            ],
            [
                'movie_id' => 10,
                'episode' => 13, 
                'title' => "Seven Reasons"
            ],
            [
                'movie_id' => 10,
                'episode' => 14, 
                'title' => "She"
            ],
            [
                'movie_id' => 10,
                'episode' => 15, 
                'title' => "Heartfelt"
            ],
            [
                'movie_id' => 10,
                'episode' => 16, 
                'title' => "Pain"
            ],
            [
                'movie_id' => 10,
                'episode' => 17, 
                'title' => "Smile"
            ],
            [
                'movie_id' => 10,
                'episode' => 18, 
                'title' => "More"
            ],
            [
                'movie_id' => 11,
                'episode' => 1, 
                'title' => "Episode 1"
            ],
            [
                'movie_id' => 11,
                'episode' => 2, 
                'title' => "Episode 2"
            ],
            [
                'movie_id' => 11,
                'episode' => 3, 
                'title' => "Episode 3"
            ],
            [
                'movie_id' => 11,
                'episode' => 4, 
                'title' => "Episode 4"
            ],
            [
                'movie_id' => 11,
                'episode' => 5, 
                'title' => "Episode 5"
            ],
            [
                'movie_id' => 11,
                'episode' => 6, 
                'title' => "Episode 6"
            ],
            [
                'movie_id' => 12,
                'episode' => 1, 
                'title' => "Efectuar lo acordado"
            ],
            [
                'movie_id' => 12,
                'episode' => 2, 
                'title' => "Imprudencias Letales"
            ],
            [
                'movie_id' => 12,
                'episode' => 3, 
                'title' => "Misfire"
            ],
            [
                'movie_id' => 12,
                'episode' => 4, 
                'title' => "Caballo de Troya"
            ],
            [
                'movie_id' => 12,
                'episode' => 5, 
                'title' => "El dia de la marmota"
            ],
            [
                'movie_id' => 12,
                'episode' => 6, 
                'title' => "La calida Guerra Fria"
            ],
            [
                'movie_id' => 12,
                'episode' => 7, 
                'title' => "Refrigerada Inestabilidad"
            ],
            [
                'movie_id' => 12,
                'episode' => 8, 
                'title' => "Tu lo has buscado"
            ],
            [
                'movie_id' => 12,
                'episode' => 9, 
                'title' => "El que la sigue la consigue"
            ],
            [
                'movie_id' => 12,
                'episode' => 10, 
                'title' => "Se acabaron las mascaras"
            ],
            [
                'movie_id' => 12,
                'episode' => 11, 
                'title' => "La cabeza del plan"
            ],
            [
                'movie_id' => 12,
                'episode' => 12, 
                'title' => "A contrarreloj"
            ],
            [
                'movie_id' => 12,
                'episode' => 13, 
                'title' => "Bella Ciao"
            ]
        ]);
    }
}
