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
//        DB::table('users')->insert([
//            'name' => '直樹',
//            'email' => 'andvari100@gmail.com',
//            'password' => bcrypt('secret'),
//        ]);

            factory(App\Guest::class, 10)->create();


    }
}
