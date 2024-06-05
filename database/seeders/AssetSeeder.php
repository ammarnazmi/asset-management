<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assets')->insert([
            [
                'name' => 'Laptop',
                'asset_type_id' => 1,
                'serial_number' => '12546',
                'brand_model' => 'lenovo',
                'quantity' => 1,
                'asset_status_id' => 2,
                'purchase_date' => '2024-06-05',
                'delivery_date' => '2024-06-06',
            ],
            [
                'name' => 'Chair',
                'asset_type_id' => 2,
                'serial_number' => '2435',
                'brand_model' => 'Todak',
                'quantity' => 1,
                'asset_status_id' => 2,
                'purchase_date' => '2024-03-19',
                'delivery_date' => '2024-03-21',
            ],
            [
                'name' => 'Desk',
                'asset_type_id' => 2,
                'serial_number' => '56564',
                'brand_model' => 'IKEA',
                'quantity' => 1,
                'asset_status_id' => 1,
                'purchase_date' => '2024-05-13',
                'delivery_date' => '2024-05-15',
            ],
        ]);
    }
}
