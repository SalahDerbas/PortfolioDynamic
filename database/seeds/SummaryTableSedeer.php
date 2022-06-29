<?php

use App\summary;
use Illuminate\Database\Seeder;

class SummaryTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('summaries')->delete();

        $data = [
            ['key' => 'title_summary', 'value' => 'title about'],
            ['key' => 'place', 'value' => 'place'],
            ['key' => 'descriptions_summary', 'value' => 'descriptions summarydescriptions
             summarydescriptions summarydescriptions summarydescriptions
             summarydescriptions summarydescriptions summarydescriptions
             summarydescriptions summarydescriptions summarydescriptions
             summarydescriptions summarydescriptions summarydescriptions
             summarydescriptions summarydescriptions summarydescriptions
             summarydescriptions summarydescriptions summarydescriptions
             summarydescriptions summarydescriptions summarydescriptions
             '],
        ];

        DB::table('summaries')->insert($data);
    }
}
