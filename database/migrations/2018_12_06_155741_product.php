<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Paket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('product', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nama_paket');
            $table->integer('harga_paket');
            $table->string('foto_paket');
            $table->string('nasi');
            $table->string('sayur');
            $table->string('lauk');
            $table->string('buah');
            $table->string('minum');
            $table->string('foto_nasi');
            $table->string('foto_sayur');
            $table->string('foto_lauk');
            $table->string('foto_buah');
            $table->string('foto_minum');
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
        Schema::dropIfExists('product');
    }
}
