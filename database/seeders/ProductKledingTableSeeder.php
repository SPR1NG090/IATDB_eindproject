<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use \App\Models\User;
class ProductKledingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('product')->insert([
            'name'=> "Pet",
            'ownerID' => User::all()->random()->id,
            'kind' => "Kleding",
            'description' => "Gucci canvas honkbalpetje origineel",
            'image' => "/img/pet.jpg",
            'price'=> "20.50",
            'date' => "2022-06-09",
        ]);

        DB::table('product')->insert([
            'name'=> "winterjas",
            'ownerID' => User::all()->random()->id,
            'kind' => "Kleding",
            'description' => "Stone Island Garment Dyed Crinkle Reps Winterjas, in het blauw",
            'image' => "/img/jas.jpg",
            'price'=> "34.70",
            'date' => "2022-07-04",
        ]);

      
        DB::table('product')->insert([
            'name'=> "denim jeans",
            'ownerID' => User::all()->random()->id,
            'kind' => "Kleding",
            'description' => "Vintage Levis Jeans voor mannen, 3 kleuren",
            'image' => "/img/jeans.jpg",
            'price'=> "8.00",
            'date' => "2022-09-01",
        ]);

        DB::table('product')->insert([
            'name'=> "polo",
            'ownerID' => User::all()->random()->id,
            'kind' => "Kleding",
            'description' => "Ralph Lauren polo shirt maat S/M 3 kleuren",
            'image' => "/img/polo.jpg",
            'price'=> "14.20",
            'date' => "2022-07-23",
        ]);

        DB::table('product')->insert([
            'name'=> "Hoodie",
            'ownerID' => User::all()->random()->id,
            'kind' => "Kleding",
            'description' => "Jack&jones hoodie grijs heren",
            'image' => "/img/hoodie.jpg",
            'price'=> "9.40",
            'date' => "2022-07-09",
        ]);
    }
}
