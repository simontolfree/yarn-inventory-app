<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raw_materials', function (Blueprint $table) {
            $table->id('raw_materials_id');
            $table->string('type');
            $table->integer('weight');
            $table->string('name');
            $table->string('colour');
            $table->integer('price_purchased');
            $table->unsignedBigInteger('invoices_id');
            $table->timestamps();


            $table->foreign('invoices_id')->references('invoices_id')->on('invoices');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('raw_materials');
    }

}
