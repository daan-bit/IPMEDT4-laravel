<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class OnderzoekenSeeder extends Seeder
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
                'naam' => 'Tevredenheidsonderzoek over catering',
                'max_aantal_mensen' => 100,
                'code' => '5AB4E'
            ]);
            DB::table('onderzoeken')->insert([
                'naam' => 'Tevredenheidsonderzoek over gedrag',
                'max_aantal_mensen' => 20,
                'code' => '43B4S'
            ]);
            //
        }
        //
    }
}
