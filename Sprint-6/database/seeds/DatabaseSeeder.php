<?php

use Illuminate\Database\Seeder;
use App\Santri;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Santri::class, 20)->create();
    }
}
