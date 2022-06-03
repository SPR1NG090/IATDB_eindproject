<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use \App\Models\User;
class ProductBoekenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        
        
        DB::table('product')->insert([
            'name'=> "Lord Of The Rings Reeks",
            'ownerID' => User::all()->random()->id,
            'kind' => "Boeken",
            'description' => "De originele trillogie van de Lord of The Rings reeks, geschreven door J.R.R Tolkien",
            'image' => "/img/LOTR.jpg",
            'price'=> "10.50",
            'date' => "2022-09-09",
        ]);

        DB::table('product')->insert([
            'name'=> "Harry Potter reeks",
            'ownerID' => User::all()->random()->id,
            'kind' => "Boeken",
            'description' => "De komplete reeks van de Harry Potter series, geschreven door J.K Rowling",
            'image' => "/img/harry.jpg",
            'price'=> "15.70",
            'date' => "2022-08-08",
        ]);

      
        DB::table('product')->insert([
            'name'=> "Grijze Jager Reeks",
            'ownerID' => User::all()->random()->id,
            'kind' => "Boeken",
            'description' => "De 16 delige reeks van de Grijze Jager, ook los verkrijgbaar, geschreven door John Flanagan",
            'image' => "/img/grijze jager.jpg",
            'price'=> "22.00",
            'date' => "2022-09-09",
        ]);

        DB::table('product')->insert([
            'name'=> "Het oneindige verhaal",
            'ownerID' => User::all()->random()->id,
            'kind' => "Boeken",
            'description' => "na de engels talige bestseller: The Never ending story komt het oneidige verhaal, geschreven door Michael Ende",
            'image' => "/img/HOV.jpg",
            'price'=> "8.20",
            'date' => "2022-07-10",
        ]);

        DB::table('product')->insert([
            'name'=> "Geranimo Stilton fantasia reeks",
            'ownerID' => User::all()->random()->id,
            'kind' => "Boeken",
            'description' => "Door de geheime schrijvende muis Geranimo stilton alle Fantasia boeken.",
            'image' => "/img/fantasia.jpg",
            'price'=> "25.40",
            'date' => "2022-11-09",
        ]);
        
            
        
    }
}
