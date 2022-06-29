<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdmainSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Salah Derbas',
            'email' => 'salahderbas1@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
