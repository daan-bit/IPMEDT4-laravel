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
            CategorienTableSeeder::class,
            OnderzoekenTableSeeder::class,
            VragenTableSeeder::class,
            AntwoordenTableSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
