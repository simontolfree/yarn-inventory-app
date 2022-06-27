<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $inventory = Product::all();

        return response()->json( $inventory );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function product_details(Request $request, $id)
    {
       // $inventory = Product::with('mat_list')->get();
        $inventory = Product::where('products_id','=',$id)->with('mat_list')->get();

        return response()->json( $inventory );
    }
    public function find_product(Request $request,$search){
        // Get the search value from the request
     //   $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $posts = Product::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return response()->json( $posts );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function add_new_product(Request $request)
    {
        $id = DB::table('products')->insert(
            array(
                'name'   =>   'test',
                'hook'   =>   '8'

            )
        );
        DB::table('mat_lists')->insert(
           [ [
                'raw_materials_id'   =>   '7',
                'products_id'   =>   $id
           ] ,
            [
                'raw_materials_id'   =>   '9',
                'products_id'   =>   $id
            ]
           ]
        );

        return response()->json( $id );


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function add_new_material(Request $request, $invoice_id=null)
    {
        if(!$invoice_id) {
/*            $invoice_id=  DB::table('invoices')->insert(
                [
                    'place_of_purchase'   =>   'Boots',
                    'invoice_file_location'   =>   'Boots',
                    'invoice_cost'   =>   '5000',
                    'vat_cost'   =>   '2500',

                ]
            );*/

            $invoice = new Invoice();
            $invoice->place_of_purchase =  'Boots';
            $invoice->invoice_file_location =  'Booots';
            $invoice->invoice_cost = 50000;
            $invoice->vat_cost = '2500';

            $invoice->save();
            $invoice_id=  $invoice->invoices_id;
        }

        $id = DB::table('raw_materials')->insert(
            array(
                'name'   =>   'test',
                'type'   =>   'yarn',
                'weight'   =>   '1000',
                'colour'   =>   'red',
                'price_purchased'   =>   1000,
                'invoices_id'   =>  $invoice_id

            )
        );


        return response()->json( $id );


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
