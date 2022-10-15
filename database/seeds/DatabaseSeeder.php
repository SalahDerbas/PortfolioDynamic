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
        $this->call(ContactTableSeeder::class);
        $this->call(PricingsTableSeeder::class);
        $this->call(AboutQuestionSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(PortfolioCategoryTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
    }
}
