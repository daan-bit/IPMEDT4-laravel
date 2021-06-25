<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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

        DB::table('users')->insert([
            'name' => 'Alex F',
            'email' => 's1118551@student.hsleiden.nl',
            'password' => bcrypt('ipmedt4alex'),
        ]);

        DB::table('users')->insert([
            'name' => 'Henny',
            'email' => 'hennyadmin@gmail.com',
            'password' => bcrypt('hennyipmedt4'),
        ]);

        //
    }
}