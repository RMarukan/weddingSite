<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
           'name' => '直樹',
           'email' => 'andvari100@gmail.com',
           'password' => bcrypt('secret'),
       ]);

//        factory(App\Models\Guest::class, 10)->create();

       DB::table('attribute')->insert([
           'attributeId' => '1',
           'attributeName' => '家族',
           'attendtype' => '挙式・披露宴',
           'weddingDay' => '2020年4月25日（土）',
           'reception' => '12:00',
           'start' => '15:30',
           'end' => '18:30',
           'fee' => '0',
       ]);

       DB::table('attribute')->insert([
           'attributeId' => '2',
           'attributeName' => '親族',
           'attendtype' => '挙式・披露宴',
           'weddingDay' => '2020年4月25日（土）',
           'reception' => '15:00',
           'start' => '15:30',
           'end' => '18:30',
           'fee' => '0',
       ]);

       DB::table('attribute')->insert([
           'attributeId' => '3',
           'attributeName' => '友人等',
           'attendtype' => '結婚式二次会',
           'weddingDay' => '2020年4月25日（土）',
           'reception' => '19:00',
           'start' => '19:30',
           'end' => '21:00',
           'fee' => '7000',
       ]);

        DB::table('age_code')->insert([
            'ageId' => '1',
            'type' => '成人',

        ]);

        DB::table('age_code')->insert([
            'ageId' => '2',
            'type' => '中学生以上',


        ]);

        DB::table('age_code')->insert([
            'ageId' => '3',
            'type' => '小学生以上中学生未満',


        ]);

        DB::table('age_code')->insert([
            'ageId' => '4',
            'type' => '３歳以上小学生未満',


        ]);

        DB::table('age_code')->insert([
            'ageId' => '5',
            'type' => '３歳未満',


        ]);
    }
}
