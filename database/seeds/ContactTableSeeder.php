<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->delete();

        $data = [
            ['key' => 'location', 'value' => 'https://goo.gl/maps/1XCqrQzifJrTRQkB9'],
            ['key' => 'Calls', 'value' => '⁦+963 954 241 914⁩'],
            ['key' => 'facebook', 'value' => 'https://www.facebook.com/7asan3wwad1/'],
            ['key' => 'instagram', 'value' => 'https://www.instagram.com/luxury.design.studio/'],
            ['key' => 'skype', 'value' => 'live:7asan3wwad'],
            ['key' => 'linkedIn', 'value' => 'https://www.linkedin.com/in/hasan-awwad-3b42131a0/'],
        ];

        DB::table('contacts')->insert($data);
    }
}
