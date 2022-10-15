<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->delete();

        $data = [
                [ 
                'id' => 1,
                'name_position' => 'Interior Designer', 
                'title_skill' => 'This is description 1',
                ],
                [
                'id' => 2,
                'name_position' => '3D Designer', 
                'title_skill' => 'This is description 2',
                ],
                [
                'id' => 3,
                'name_position' => 'Architect Engineer', 
                'title_skill' => 'This is description 3',
                ],
              

              
        ];

        DB::table('positions')->insert($data);
    }
}
