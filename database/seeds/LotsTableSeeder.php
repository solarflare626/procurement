<?php

use Illuminate\Database\Seeder;

class LotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lots')->insert([
            'lot_no' => 1,
        ]);
        DB::table('lots')->insert([
            'lot_no' => 2,
        ]);
        DB::table('lots')->insert([
            'lot_no' => 3,
        ]);
    }
}
