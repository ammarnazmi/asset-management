<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetStatus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asset_statuses')->insert([
            [
                'id' => 1,
                'name' => 'Available',
            ],
            [
                'id' => 2,
                'name' => 'In Use',
            ],
        ]);
    }
}
