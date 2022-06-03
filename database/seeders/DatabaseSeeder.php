<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            KindOfProductTableSeeder::class,
            ProductBoekenTableSeeder::class,
            ProductBordspellenTableSeeder::class,
            ProductInstrumentenTableSeeder::class,
            ProductKledingTableSeeder::class,
            ProductSportTableSeeder::class,
            ProductVideospellenTableSeeder::class,
            ReviewTableSeeder::class,
        ]);
    }
}
