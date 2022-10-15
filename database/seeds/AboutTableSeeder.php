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
            ['key' => 'company_name', 'value' => 'LUXURY DESIGN STUDIO'],
            ['key' => 'title_about', 'value' => 'Interior and exterior design In addition to shop drawing  plans Architectural animation video Structural, electrical, mechanical and sanitary studies'],
            ['key' => 'birthday', 'value' => '2038-01-19 03:14:07'],
            ['key' => 'city', 'value' => 'Damascus'],
            ['key' => 'website', 'value' => 'https://instagram.com/luxury.design.studio?igshid=YmMyMTA2M2Y='],
            ['key' => 'watch', 'value' => 'https://www.youtube.com/channel/UCSz4t9W12EKv1d0CjNUoiSA'],
            ['key' => 'degree', 'value' => 'Master'],
            ['key' => 'email', 'value' => '7asan3wwad@gmail.com'],
            ['key' => 'descriptions', 'value' => 'Interior and exterior design In addition to shop drawing  plans Architectural animation video Structural, electrical, mechanical and sanitary studies'],
            ['key' => 'age', 'value' => '25'],
            ['key' => 'freelancer', 'value' => 'Active'],
            ['key' => 'logo', 'value' => '2.jpg'],
            ['key' => 'Position', 'value' => 'Interior Designer & 3D Designer.'],
            ['key' => 'user', 'value' => '2.jpg'],
        ];

        DB::table('abouts')->insert($data);



    }
}
