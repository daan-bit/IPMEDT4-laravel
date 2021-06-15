<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CategorienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorien')->insert([
            'naam' => 'Informatica',
        ]);
        DB::table('categorien')->insert([
            'naam' => 'Kinderen',
        ]);

        //
    }
}
