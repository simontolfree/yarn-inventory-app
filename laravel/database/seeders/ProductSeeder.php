<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                'name' => 'Mini Blobfish',
                'hook' => '8',
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Worry Bean',
                'hook' => '2.5',
            ]
        );
    }
}
