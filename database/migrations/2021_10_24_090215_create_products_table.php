<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('0,025_gr');
            $table->string('0,05_gr');
            $table->string('0,1_gr');
            $table->string('0,2_gr');
            $table->string('0,5_gr');
            $table->string('1_gr');
            $table->string('5_gr');
            $table->string('10_gr');
            $table->string('25_gr');
            $table->string('50_gr');
            $table->string('100_gr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
