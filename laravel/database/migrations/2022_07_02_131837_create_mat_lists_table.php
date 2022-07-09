<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mat_lists', function (Blueprint $table) {
            $table->id('mat_list_id');
            $table->unsignedBigInteger('raw_materials_id');
            $table->unsignedBigInteger('products_id');
            $table->integer('amount');
            $table->string('units');
            $table->timestamps();
            $table->foreign('raw_materials_id')->references('raw_materials_id')->on('raw_materials');
            $table->foreign('products_id')->references('products_id')->on('products');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mat_lists');
    }
}
