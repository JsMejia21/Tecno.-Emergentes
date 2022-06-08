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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('dateVenta');
            $table->string('inaProd');
            $table->double('priceUnit', 8, 3);
            $table->integer('cantVenta');
            $table->double('priceTot', 8, 3);
            $table->string('nameCliente');
            $table->string('telCliente');
            $table->string('inaUsuario');
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
        Schema::dropIfExists('ventas');
    }
};
