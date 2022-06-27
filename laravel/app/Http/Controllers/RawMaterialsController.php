<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\raw_materials;
use Illuminate\Http\Request;

class RawMaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventory = raw_materials::with('invoices')->get();
    //    $inventory = raw_materials::with('invoices')->find(1,'raw_materials_id');

        return response()->json( $inventory );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\raw_materials  $raw_materials
     * @return \Illuminate\Http\Response
     */
    public function show(raw_materials $raw_materials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\raw_materials  $raw_materials
     * @return \Illuminate\Http\Response
     */
    public function edit(raw_materials $raw_materials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\raw_materials  $raw_materials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, raw_materials $raw_materials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\raw_materials  $raw_materials
     * @return \Illuminate\Http\Response
     */
    public function destroy(raw_materials $raw_materials)
    {
        //
    }
}
