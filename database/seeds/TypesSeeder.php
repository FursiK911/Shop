<?php

use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            ['type' => 'Куртка'],
            ['type' => 'Джинсы'],
            ['type' => 'Футболка'],
            ['type' => 'Платье'],
            ['type' => 'Блузка'],
            ['type' => 'Обувь'],
        ]);
    }
}
