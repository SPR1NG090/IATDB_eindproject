<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use \App\Models\User;
class ProductVideospellenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Videospellen_product_array = ["zelda BOTW", "Spiderman", "God Of war", "Pokemon Arceus", "Call Of Duty: Modern Warfare"];

        DB::table('product')->insert([
            'name'=> "Zelda BOTW",
            'ownerID' => User::all()->random()->id,
            'kind' => "Videospellen",
            'description' => "Zelda Breath of the Wild voor de Nintendo Switch",
            'image' => "/img/zelda.jpg",
            'price'=> "23.40",
            'date' => "2022-12-01",
        ]);

        DB::table('product')->insert([
            'name'=> "Spider-Man Miles Morales",
            'ownerID' => User::all()->random()->id,
            'kind' => "Videospellen",
            'description' => "Spider-Man Miles Morales voor playstation 5, pegi 16",
            'image' => "/img/spiderman.jpg",
            'price'=> "18.99",
            'date' => "2022-12-04",
        ]);

      
        DB::table('product')->insert([
            'name'=> "God of War",
            'ownerID' => User::all()->random()->id,
            'kind' => "Videospellen",
            'description' => "God of War 2020 voor ps4",
            'image' => "/img/GOW.jpg",
            'price'=> "13.20",
            'date' => "2022-10-24",
        ]);

        DB::table('product')->insert([
            'name'=> "Pokemon: Arceus",
            'ownerID' => User::all()->random()->id,
            'kind' => "Videospellen",
            'description' => "Pokemon: arceus voor de Nintendo Switch",
            'image' => "/img/arceus.jpg",
            'price'=> "20.20",
            'date' => "2022-11-20",
        ]);

        DB::table('product')->insert([
            'name'=> "Call of Duty: Modern Warfare",
            'ownerID' => User::all()->random()->id,
            'kind' => "Videospellen",
            'description' => "Call of Duty: Modern Warfare voor playstation 4",
            'image' => "/img/COD.jpg",
            'price'=> "18.80",
            'date' => "2022-12-11",
        ]);
    }
    
}
