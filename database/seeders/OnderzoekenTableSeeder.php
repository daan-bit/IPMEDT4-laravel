<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class OnderzoekenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Onderzoeken')->insert([
            'name' => 'Onderzoek test 1',
            'max_aantal_mensen' => 20,
            'code' => 'ipmedt4alex',
        ]);
        DB::table('Onderzoeken')->insert([
            'name' => 'Onderzoek test 2',
            'max_aantal_mensen' => 40,
            'code' => 'a2x3s5r6',
        ]);
    }
}