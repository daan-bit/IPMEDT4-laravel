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
                'vraag' => 'Hoe eens bent u het met dat de kinderen op school iets leren?',
                'type_vraag' => 'open'
            ]);
            DB::table('vragen')->insert([
                'onderzoek_id' => 1,
                'cat_naam' => 'Informatica',
                'vraag' => 'Dit is een test 2',
                'type_vraag' => 'meerkeuze'
            ]);
            DB::table('vragen')->insert([
                'onderzoek_id' => 1,
                'cat_naam' => 'Kinderen',
                'vraag' => 'Dit is een test3',
                'type_vraag' => 'meerkeuze'
            ]);
            DB::table('vragen')->insert([
                'onderzoek_id' => 1,
                'cat_naam' => 'Informatica',
                'vraag' => 'Dit is een test4',
                'type_vraag' => 'meerkeuze'
            ]);
            DB::table('vragen')->insert([
                'onderzoek_id' => 1,
                'cat_naam' => 'Informatica',
                'vraag' => 'Dit is een test',
                'type_vraag' => 'meerkeuze'
            ]);
    }
}
