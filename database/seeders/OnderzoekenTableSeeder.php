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
        {
            DB::table('onderzoeken')->insert([
                'naam' => 'Tevredenheidsonderzoek over school',
                'max_aantal_mensen' => 100,
                'code' => '5AB4E'
            ]);
            DB::table('onderzoeken')->insert([
                'naam' => 'Tevredenheidsonderzoek over gedrag',
                'max_aantal_mensen' => 20,
                'code' => '43B4S'
            ]);
            DB::table('onderzoeken')->insert([
                'naam' => 'Onderzoek test 1',
                'max_aantal_mensen' => 20,
                'code' => 'ipmedt4alex',
            ]);
            DB::table('onderzoeken')->insert([
                'naam' => 'Onderzoek test 2',
                'max_aantal_mensen' => 40,
                'code' => 'a2x3s5r6',
            ]);
            //
        }
        //
    }
}
