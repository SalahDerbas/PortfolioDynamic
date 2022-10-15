<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->delete();

        $data = [
                [
                'id' => 1,
                'name_client' => 'Hasan Awwad', 
                'position_client' => '3D Max',
                'title_client' => 'This is title 1',
                'name_image' => '2.jpg',
                'image' => 'assets/img/client.png',
                'facebook' => 'https://www.facebook.com/7asan3wwad1/',
                'instegram' => 'https://www.instagram.com/luxury.design.studio/',
                ],
                [
                'id' => 2,
                'name_client' => 'Abo Hasan Awwad', 
                'position_client' => 'Autocad',
                'title_client' => 'This is title 2',
                'name_image' => '2.jpg',
                'image' => 'assets/img/client.png',
                'facebook' => 'https://www.facebook.com/7asan3wwad1/',
                'instegram' => 'https://www.instagram.com/luxury.design.studio/',
                ],
                [
                'id' => 3,
                'name_client' => 'Grand Hasan Awwad', 
                'position_client' => '2D',
                'title_client' => 'This is title 3',
                'name_image' => '2.jpg',
                'image' => 'assets/img/client.png',
                'facebook' => 'https://www.facebook.com/7asan3wwad1/',
                'instegram' => 'https://www.instagram.com/luxury.design.studio/',
                ],  
                [
                'id' => 4,
                'name_client' => 'Grand Grand Hasan Awwad', 
                'position_client' => 'Engeneering',
                'title_client' => 'This is title 3',
                'name_image' => '2.jpg',
                'image' => 'assets/img/client.png',
                'facebook' => 'https://www.facebook.com/7asan3wwad1/',
                'instegram' => 'https://www.instagram.com/luxury.design.studio/',
                ],             
        ];

        DB::table('clients')->insert($data);
    }
}
