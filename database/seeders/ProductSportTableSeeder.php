<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use \App\Models\User;
class ProductSportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('product')->insert([
            'name'=> "Tennis Racket",
            'ownerID' => User::all()->random()->id,
            'kind' => "Sport",
            'description' => "tennis racket van destiny",
            'image' => "/img/tennis.jpg",
            'price'=> "19.50",
            'date' => "2022-09-09",
        ]);

        DB::table('product')->insert([
            'name'=> "Honkbal Knuppel",
            'ownerID' => User::all()->random()->id,
            'kind' => "Sport",
            'description' => "honkbal knuppel 28inch easton",
            'image' => "/img/knuppel.jpg",
            'price'=> "10.00",
            'date' => "2022-08-04",
        ]);

      
        DB::table('product')->insert([
            'name'=> "Basketbal",
            'ownerID' => User::all()->random()->id,
            'kind' => "Sport",
            'description' => "Wilson basketbal, Toronto Raptors",
            'image' => "/img/basketbal.jpg",
            'price'=> "5.00",
            'date' => "2022-08-25",
        ]);

        DB::table('product')->insert([
            'name'=> "Voetbal",
            'ownerID' => User::all()->random()->id,
            'kind' => "Sport",
            'description' => "Derbystar voetbal, volwassenen",
            'image' => "/img/voetbal.jpg",
            'price'=> "4.20",
            'date' => "2022-07-20",
        ]);

        DB::table('product')->insert([
            'name'=> "hockey stick",
            'ownerID' => User::all()->random()->id,
            'kind' => "Sport",
            'description' => "assortiment hockeysticks zie foto:",
            'image' => "/img/stick.jpg",
            'price'=> "10.00",
            'date' => "2022-12-01",
        ]);
    }
}
