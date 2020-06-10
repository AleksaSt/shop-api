<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Aleksa',
                'last_name' => 'Stojcevic',
                'email' => 'aleksa@aleksa.com',
                'password' => 'password'
            ],
            [
                'first_name' => 'Aleksa1',
                'last_name' => 'Stojcevic',
                'email' => 'aleksa@aleksa1.com',
                'password' => 'password'
            ],
            [
                'first_name' => 'Aleksa2',
                'last_name' => 'Stojcevic',
                'email' => 'aleksa@aleksa2.com',
                'password' => 'password'
            ],
            [
                'first_name' => 'Aleksa3',
                'last_name' => 'Stojcevic',
                'email' => 'aleksa@aleksa3.com',
                'password' => 'password'
            ],
            [
                'first_name' => 'Aleksa4',
                'last_name' => 'Stojcevic',
                'email' => 'aleksa@aleksa4.com',
                'password' => 'password'
            ]
        ]);
    }
}
