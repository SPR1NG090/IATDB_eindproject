<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use \App\Models\User;
class ProductBordspellenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Bordspellen_product_array = ["Monopoly", "Risk", "Regenwormen", "Terraforming Mars", "Het Verboden Eiland"];

        DB::table('product')->insert([
            'name'=> "Monopoly",
            'ownerID' => User::all()->random()->id,
            'kind' => "Bordspellen",
            'description' => "Monopoly is een bordspel waarin 3 tot 6 mensen het tegen elkaar opnemen om zoveel mogelijk straten te winnen, en daarmee zoveel mogelijk geld, uitgegeven door Hasbro gaming",
            'image' => "/img/monopoly.jpg",
            'price'=> "6.20",
            'date' => "2022-08-11",
        ]);

        DB::table('product')->insert([
            'name'=> "Risk",
            'ownerID' => User::all()->random()->id,
            'kind' => "Bordspellen",
            'description' => "binnen het spel Risk is het doel om als speler de wereld te veroveren, uitgegeven door Hasbro gaming",
            'image' => "/img/risk.jpg",
            'price'=> "7.70",
            'date' => "2022-08-02",
        ]);

      
        DB::table('product')->insert([
            'name'=> "Regenwormen",
            'ownerID' => User::all()->random()->id,
            'kind' => "Bordspellen",
            'description' => "gebruik 8 dobbelstenen om zoveel mogelijk regenwormen te verzamelen, uitgegeven door 999-games",
            'image' => "/img/regenwormen.jpeg",
            'price'=> "5.00",
            'date' => "2022-09-19",
        ]);

        DB::table('product')->insert([
            'name'=> "Terraforming Mars",
            'ownerID' => User::all()->random()->id,
            'kind' => "Bordspellen",
            'description' => "werk samen met je vriend of famillie om de planeet mars woonbaar te maken, uitgegeven door: ",
            'image' => "/img/mars.jpg",
            'price'=> "20.20",
            'date' => "2022-07-18",
        ]);

        DB::table('product')->insert([
            'name'=> "Het Verboden Eiland",
            'ownerID' => User::all()->random()->id,
            'kind' => "Bordspellen",
            'description' => "werk samen tegen het spel om het eiland te redden terwijl het langzaam in het water verdwijnt, uitgegeven door White Goblin Games",
            'image' => "/img/verbodeneiland.jpg",
            'price'=> "12.40",
            'date' => "2022-11-19",
        ]);
    }
}
