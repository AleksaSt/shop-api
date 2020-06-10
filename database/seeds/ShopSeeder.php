<?php

use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'name' => 'shop 1',
                'image' => 'https://picsum.photos/200/300',
                'user_id' => 1

            ],
            [
                'name' => 'shop 2',
                'image' => 'https://picsum.photos/200/300',
                'user_id' => 2

            ],
            [
                'name' => 'shop 3',
                'image' => 'https://picsum.photos/200/300',
                'user_id' => 3

            ],
            [
                'name' => 'shop 4',
                'image' => 'https://picsum.photos/200/300',
                'user_id' => 4

            ],
            [
                'name' => 'shop 5',
                'image' => 'https://picsum.photos/200/300',
                'user_id' => 5

            ]
        ]);
    }
}
