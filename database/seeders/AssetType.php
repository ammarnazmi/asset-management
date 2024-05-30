<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asset_types')->insert([
            [
                'id' => 1,
                'name' => 'ICT Equipment',
            ],
            [
                'id' => 2,
                'name' => 'Furniture',
            ],
            [
                'id' => 3,
                'name' => 'Laboratory Equipment',
            ],
        ]);
    }
}
