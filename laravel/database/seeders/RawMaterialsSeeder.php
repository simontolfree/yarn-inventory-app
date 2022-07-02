<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RawMaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('raw_materials')->insert([
            'type' => 'yarn',
            'weight' => '100',
            'price_purchased'=>'100',
                'name'=>'Drops Baby Merino',
                'colour'=>'black',
                'invoices_id' => 1,
                'created_at' => Carbon::now()
            ]
        );
        DB::table('raw_materials')->insert(
            [
                'type' => 'stuffing',
                'weight' => '1000',
                'price_purchased'=>'1000',
                'name'=>'stuffing',
                'colour'=>'white',
                'invoices_id' => 1, // password
                'created_at' => Carbon::now()

            ]
        );
        DB::table('raw_materials')->insert(
            [
                'type' => 'eyes',
                'weight' => '100',
                'price_purchased'=>'10000',
                'colour'=>'black',
                'name'=>'Safety Eyes',
                'invoices_id' => 2, // password
                'created_at' => Carbon::now()
            ]
        );




        DB::table('raw_materials')->insert([
                'type' => 'yarn',
                'weight' => '100',
                'price_purchased'=>'100',
                'name'=>'Rico Baby Dream DK',
                'colour'=>'blue',
                'invoices_id' => 1,
                'created_at' => Carbon::now()
            ]
        );
        DB::table('raw_materials')->insert(
            [
                'type' => 'eyes',
                'weight' => '12',
                'price_purchased'=>'10000',
                'colour'=>'black',
                'name'=>'Safety Eyes',
                'invoices_id' => 2, // password
                'created_at' => Carbon::now()
            ]
        );
        DB::table('raw_materials')->insert(
            [
                'type' => 'thread',
                'weight' => '120',
                'price_purchased'=>'10000',
                'colour'=>'black',
                'name'=>'Embroidery Thread',
                'invoices_id' => 2, // password
                'created_at' => Carbon::now()
            ]
        );
    }
}
