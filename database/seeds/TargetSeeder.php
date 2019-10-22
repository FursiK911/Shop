<?php

use Illuminate\Database\Seeder;

class TargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('targets')->insert([
            ['target' => 'Мужская одежда'],
            ['target' => 'Женская одежда'],
            ['target' => 'Детская одежда'],
        ]);
    }
}
