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
        DB::table('app_items')->insert([
            'item_description' => 'Item 1',
            'specifications' => 'item 1',
            'unit' => 'box',
            'unit_price' => 750,
            'quantity' => 16,
            'amount' => 10000,
            'cost_center' => 'Cashier',
            'procurement_mode' => 'SVP',
            'acc_no' => 123456,
            'lot_id' => 1,
        ]);

        DB::table('app_items')->insert([
            'item_description' => 'Item 2',
            'specifications' => 'item 2',
            'unit' => 'kg',
            'unit_price' => 750,
            'quantity' => 16,
            'amount' => 1000,
            'cost_center' => 'Cashier',
            'procurement_mode' => 'SVP',
            'acc_no' => 123456,
            'lot_id' => 1,
        ]);
    }
}
