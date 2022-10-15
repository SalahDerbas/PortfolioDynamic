<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PricingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pricings')->delete();

        $data = [
                [
                'id' => 1,
                'name_pricing' => '3D design ', 
                'date' => 'mounth',
                'price' => '20',
                'featured_1' => 'featured_1',
                'featured_2' => 'featured_2',
                'featured_3' => 'featured_3',
                'featured_4' => 'featured_4',
                'featured_5' => 'featured_5'
                ],
                [
                'id' => 2,
                'name_pricing' => 'Shop drawing ', 
                'date' => 'mounth',
                'price' => '20',
                'featured_1' => 'featured_1',
                'featured_2' => 'featured_2',
                'featured_3' => 'featured_3',
                'featured_4' => 'featured_4',
                'featured_5' => 'featured_5'
               ],
               [
                'id' => 3,
                'name_pricing' => 'Animation Architect ', 
                'date' => 'mounth',
                'price' => '20',
                'featured_1' => 'featured_1',
                'featured_2' => 'featured_2',
                'featured_3' => 'featured_3',
                'featured_4' => 'featured_4',
                'featured_5' => 'featured_5'
               ]
        ];

        DB::table('pricings')->insert($data);

    }
}
