<?php

use Illuminate\Database\Seeder;

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
            ['key' => 'location', 'value' => 'https://www.facebook.com/salah.drbas.1'],
            ['key' => 'Calls', 'value' => '0936453165'],
            ['key' => 'facebook', 'value' => 'https://www.facebook.com/salah.drbas.1'],
            ['key' => 'twitter', 'value' => 'https://www.facebook.com/salah.drbas.1'],
            ['key' => 'instagram', 'value' => 'https://www.facebook.com/salah.drbas.1'],
            ['key' => 'skype', 'value' => 'https://www.facebook.com/salah.drbas.1'],
            ['key' => 'linkedIn', 'value' => 'https://www.facebook.com/salah.drbas.1'],
        ];

        DB::table('contacts')->insert($data);
    }
}
