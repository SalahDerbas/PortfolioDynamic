<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->delete();

        $data = [
                [
                'id' => 1,
                'title_skill' => 'This is Title 1', 
                'position_skill' => '3D Max ',
                'percentage'  => 63,
                ],
                [
                'id' => 2,
                'title_skill' => 'This is Title 2', 
                'position_skill' => '2D  ',
                'percentage'  => 33,
                ],
                [
                'id' => 3,
                'title_skill' => 'This is Title 3', 
                'position_skill' => 'Autocade ',
                'percentage'  => 93,
                ], 

              
        ];

        DB::table('skills')->insert($data);
    }
}
