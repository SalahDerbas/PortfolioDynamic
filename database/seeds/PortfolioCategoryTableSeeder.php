<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_categories')->delete();

        $data = [
                [
                'id' => 1,
                'name_category' => '3D 1', 
                'title_category' => 'This is title 1',
                ],
                [
                'id' => 2,
                'name_category' => '3D 2', 
                'title_category' => 'This is title 2',
                ],
                [
                'id' => 3,
                'name_category' => '3D 3', 
                'title_category' => 'This is title 3',
                ],
               

              
        ];

        DB::table('portfolio_categories')->insert($data);
    }
}
