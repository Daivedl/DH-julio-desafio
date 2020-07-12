<?php

use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' => 'admin',
            'apellido' => 'admin',
            'edad' => '1',
            'email'=> 'admin@gmail.com',
            'password' => bcrypt('laravel'),
            'role' => 'admin',

        ]);
    }
}
