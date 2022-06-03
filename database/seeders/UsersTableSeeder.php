<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(10)
            ->create();

        DB::table('users')->insert([
            'name' => "Gijs",
            'email' => "gijs.van.vugt8@gmail.com",
            'password' => bcrypt('Neusje02'),
            'permissions' => 'Admin',
        ]);

    }
}
