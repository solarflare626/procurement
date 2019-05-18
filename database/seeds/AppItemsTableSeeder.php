<?php

use Illuminate\Database\Seeder;

class AppItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('app_items')->insert([
            'item_description' => 'Blank Check',
            'specifications' => '',
            'unit' => 'pc',
            'unit_price' => 750,
            'quantity' => 16,
            'amount' => 12000,
            'cost_center' => 'Cashier',
            'procurement_mode' => 'SVP',
            'acc_no' => 123456,
            'lot_id' => 1,
        ]);
    }
}
