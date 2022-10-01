<?php

use App\about;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->delete();

        $data = [
            ['key' => 'title_about', 'value' => 'title about'],
            ['key' => 'birthday', 'value' => '2038-01-19 03:14:07'],
            ['key' => 'city', 'value' => 'Damascus'],
            ['key' => 'website', 'value' => 'www.'],
            ['key' => 'watch', 'value' => 'www.youtube.com'],
            ['key' => 'degree', 'value' => 'Master'],
            ['key' => 'email', 'value' => 'ssss@gmail.com'],
            ['key' => 'descriptions', 'value' => 'descriptions
            summarydescriptions summarydescriptions summarydescriptions
             summarydescriptions summarydescriptions summarydescriptions
             summarydescriptions summarydescriptions summarydescriptions
             summarydescriptions summarydescriptions summarydescriptions
             summarydescriptions summarydescriptions summarydescriptions
             summarydescriptions summarydescriptions summarydescriptions
             summarydescriptions summarydescriptions summarydescriptions'],
            ['key' => 'age', 'value' => '25'],
            ['key' => 'freelancer', 'value' => 'Active'],
            ['key' => 'logo', 'value' => '1.jpg'],
            ['key' => 'Position', 'value' => 'UI/UX Designer & Web Developer.'],
            ['key' => 'user', 'value' => '2.jpg'],
        ];

        DB::table('abouts')->insert($data);



    }
}
