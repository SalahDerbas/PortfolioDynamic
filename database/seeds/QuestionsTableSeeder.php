<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->delete();

        $data = [
                [
                'id' => 1,
                'question' => 'What question 1?', 
                'answer' => 'This is answer 1',

                ],
                [
                'id' => 2,
                'question' => 'What question 2?', 
                'answer' => 'This is answer 1',
                ],
                [
                'id' => 3,
                'question' => 'What question 3?', 
                'answer' => 'This is answer 1',
                ],

              
        ];

        DB::table('questions')->insert($data);
    }
}
