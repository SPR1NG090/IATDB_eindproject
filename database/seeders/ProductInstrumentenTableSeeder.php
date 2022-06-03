<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use \App\Models\User;
class ProductInstrumentenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Instrumenten_product_array = ["Gitaar", "Keyboard", "Viool", "Trompet", "Harp"];

        DB::table('product')->insert([
            'name'=> "Gitaar",
            'ownerID' => User::all()->random()->id,
            'kind' => "Instrumenten",
            'description' => "Elektrische Fender Stratocaster gitaar, 6 snaren",
            'image' => "/img/fender_gitaar.jpg",
            'price'=> "20.50",
            'date' => "2022-10-09",
        ]);

        DB::table('product')->insert([
            'name'=> "Keyboard",
            'ownerID' => User::all()->random()->id,
            'kind' => "Instrumenten",
            'description' => "vidaXL elektrisch keyboard met 61 toetsen, muziek en een keyboardstandaard",
            'image' => "/img/keyboard.jpg",
            'price'=> "25.20",
            'date' => "2022-08-08",
        ]);

      
        DB::table('product')->insert([
            'name'=> "Viool",
            'ownerID' => User::all()->random()->id,
            'kind' => "Instrumenten",
            'description' => "Yamaha VA 5S 14 Viola 14 viool",
            'image' => "/img/viool.jpg",
            'price'=> "45.00",
            'date' => "2022-11-11",
        ]);

        DB::table('product')->insert([
            'name'=> "Trompet",
            'ownerID' => User::all()->random()->id,
            'kind' => "Instrumenten",
            'description' => "Yamaha YTR 6335RC trompet",
            'image' => "/img/trompet.jpg",
            'price'=> "43.20",
            'date' => "2022-11-10",
        ]);

        DB::table('product')->insert([
            'name'=> "Harp",
            'ownerID' => User::all()->random()->id,
            'kind' => "Instrumenten",
            'description' => "Thomann Celtische Harp gemaakt van Ashout, 36 snaren",
            'image' => "/img/harp.jpg",
            'price'=> "102.99",
            'date' => "2022-11-22",
        ]);
    }
}
