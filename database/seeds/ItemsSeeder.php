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
            ['name_of_item' => 'Черная спортивная футболка с логотипом Under Armour', 'targets_id' => '2', 'types_id' => '3',
                'price' => '1000', 'clothing_size' => 'L', 'rating' => '5', 'img' => 'assets/img/content/jersey1.jpeg'],
            ['name_of_item' => 'Красная блузка', 'targets_id' => '2', 'types_id' => '5',
                'price' => '1500', 'clothing_size' => 'L', 'rating' => '5', 'img' => 'assets/img/content/Layer_3.png'],
            ['name_of_item' => 'Бледно-синее платье а-силуэт Demma с рисунком', 'targets_id' => '2', 'types_id' => '4',
                'price' => '1200', 'clothing_size' => 'L', 'rating' => '5', 'img' => 'assets/img/content/dress2.jpg'],
            ['name_of_item' => 'Тёмные джинсы', 'targets_id' => '1', 'types_id' => '2',
                'price' => '700', 'clothing_size' => 'L', 'rating' => '5', 'img' => 'assets/img/content/jeans1.jpg'],
            ['name_of_item' => 'Худи H&M', 'targets_id' => '1', 'types_id' => '1',
                'price' => '2000', 'clothing_size' => 'L', 'rating' => '5', 'img' => 'assets/img/content/jacket1.jpg'],
            ['name_of_item' => 'Темно-синяя демисезонная куртка MR 520', 'targets_id' => '1', 'types_id' => '1',
                'price' => '2500', 'clothing_size' => 'L', 'rating' => '5', 'img' => 'assets/img/content/jacket2.jpeg'],
            ['name_of_item' => 'Голубое повседневное платье миди ViDa с рисунком', 'targets_id' => '3', 'types_id' => '4',
                'price' => '1300', 'clothing_size' => 'L', 'rating' => '5', 'img' => 'assets/img/content/dress3.jpg'],
            ['name_of_item' => 'Белая однотонная блузка с длинным рукавом Vidoli демисезонная', 'targets_id' => '3', 'types_id' => '5',
                'price' => '800', 'clothing_size' => 'L', 'rating' => '5', 'img' => 'assets/img/content/blouse1.jpg'],
        ]);
    }
}
