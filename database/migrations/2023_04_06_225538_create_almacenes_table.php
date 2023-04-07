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
        Schema::create('almacenes', function (Blueprint $table) {
            $table->id();
            $table-> string('almacen_talar');
            $table-> string('almacen_outlet');
            $table-> string('almacen_quilmes');
            $table-> string('almacen_mercadoLibre_ideko');
            $table-> string('almacen_mercadolibre_tucson');
            $table-> string('almacen_tigre');
            $table-> string('almacen_bariloche');
            $table-> string('local_pilar_exhibiciones_muestras');
            $table-> string('local_showroom_quilmes');
            $table-> string('local_showroom_talar');
            $table-> string('local_showroom_outlet');
            $table-> string('diferencia_ciclico');
            $table-> string('almacen_mar_venta');
            $table-> string('mercaderia_devolver_prov');
            $table-> string('almacen_mar_deposito');
            $table-> string('stock_defectuoso_fallas');
            $table-> string('almacen_mar_fabrica');
            $table-> string('almacen_ext_mepano');
            $table-> string('almacen_pilar');
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
        Schema::dropIfExists('almacenes');
    }
};
