<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class VragenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('vragen')->insert([
                'onderzoek_id' => 1,
                'cat_naam' => 'Informatica',
                'vraag' => 'Hoe leuk vindt u uw collegas  op school?',
                'type_vraag' => 'open'
            ]);
            DB::table('vragen')->insert([
                'onderzoek_id' => 1,
                'cat_naam' => 'Informatica',
                'vraag' => 'Wat doe je het vaakste op school',
                'type_vraag' => 'open'
            ]);
    }
}
