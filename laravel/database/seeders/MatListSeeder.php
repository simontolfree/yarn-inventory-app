<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mat_lists')->insert(
            [
                'raw_materials_id' => '1',
                'products_id' => '1',
                'amount' => '50',
                'units' => 'g',
            ]
        );
        DB::table('mat_lists')->insert(
            [
                'raw_materials_id' => '2',
                'products_id' => '1',
                'amount' => '100',
                'units' => 'g',
            ]
        );
        DB::table('mat_lists')->insert(
            [
                'raw_materials_id' => '3',
                'products_id' => '1',
                'amount' => '2',
                'units' => 'mm',
            ]
        );


        DB::table('mat_lists')->insert(
            [
                'raw_materials_id' => '4',
                'products_id' => '2',
                'amount' => '50',
                'units' => 'g',
            ]
        );
        DB::table('mat_lists')->insert(
            [
                'raw_materials_id' => '2',
                'products_id' => '2',
                'amount' => '100',
                'units' => 'g',
            ]
        );
        DB::table('mat_lists')->insert(
            [
                'raw_materials_id' => '5',
                'products_id' => '2',
                'amount' => '2',
                'units' => 'mm',
            ]
        );

        DB::table('mat_lists')->insert(
            [
                'raw_materials_id' => '6',
                'products_id' => '2',
                'amount' => '200',
                'units' => 'g',
            ]
        );

    }
}
