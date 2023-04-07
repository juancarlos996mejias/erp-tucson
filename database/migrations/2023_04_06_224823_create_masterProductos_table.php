<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterProductos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('articulo');
            $table->string('marca');
            $table->string('superRubro');
            $table->string('rubro');
            $table->string('lote');
            $table->string('stock_total');
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
        Schema::dropIfExists('masterProductos');
    }
};
