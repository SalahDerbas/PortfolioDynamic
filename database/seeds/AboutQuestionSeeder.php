<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aboutquestions')->delete();

        $data = [
                [
                'id' => 1,
                'question' => 'What services does the company provide?', 
                'answer' => 'Interior and exterior design In addition to shop drawing  plans',

                ],
                [
                'id' => 2,
                'question' => 'What is so special about you?', 
                'answer' => 'Accuracy in design and punctuality',
                ],
                [
                'id' => 3,
                'question' => 'Is your coffee plain or sweet?', 
                'answer' => 'Plain',
                ],

              
        ];

        DB::table('aboutquestions')->insert($data);

    }
}
