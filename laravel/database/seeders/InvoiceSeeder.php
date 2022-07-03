<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoices')->insert(
            [
                'invoice_file_location' => 'yarn',
                'place_of_purchase' => 'Boots',
                'invoice_cost' => "500",
                'vat_cost' => 1, // password
                'created_at' => Carbon::now()
            ]
        );
        DB::table('invoices')->insert(
            [
                'invoice_file_location' => 'yarn',
                'place_of_purchase' => 'Amazon',
                'invoice_cost' => "15000",
                'vat_cost' => 1, // password
                'created_at' => Carbon::now()
            ]
        );
    }
}
