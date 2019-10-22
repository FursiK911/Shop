<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            ['name_of_item' => 'Маленькое черное платье', 'targets_id' => '2', 'types_id' => '4',
                'price' => '2000', 'clothing_size' => 'L', 'rating' => '5', 'img' => 'assets/img/content/dress1.png'],
            ['name_of_item' => 'Белая фуболка', 'targets_id' => '1', 'types_id' => '3',
                'price' => '1000', 'clothing_size' => 'L', 'rating' => '5', 'img' => 'assets/img/content/Layer_2.png'],
            ['name_of_item' => 'Красная блузка', 'targets_id' => '2', 'types_id' => '5',
                'price' => '1500', 'clothing_size' => 'L', 'rating' => '5', 'img' => 'assets/img/content/Layer_3.png'],
        ]);
    }
}
