<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->delete();

        $data = [
                [
                'id' => 1,
                'name_service' => 'Interior ', 
                'title_service' => 'Interior and exterior design ',

                ],
                [
                'id' => 2,
                'name_service' => 'Addition ', 
                'title_service' => 'In addition to shop drawing  plans',

                ],
                [
                'id' => 3,
                'name_service' => 'Architectural ', 
                'title_service' => 'Architectural animation video Structural, electrical, mechanical and sanitary studies',

                ],
                [
                    'id' => 4,
                    'name_service' => 'Engeneering ', 
                    'title_service' => 'Architectural animation video Structural, electrical, mechanical and sanitary studies',
    
                    ],
               

              
        ];

        DB::table('services')->insert($data);
    }
}
