<?php

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
        $this->call(AdmainSeedeer::class);
        $this->call(AboutTableSeeder::class);
        $this->call(SummaryTableSedeer::class);
        $this->call(ContactTableSeeder::class);
    }
}
