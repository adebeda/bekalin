<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnakTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anak', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('users_id');
            $table->string('nama_anak');
            $table->string('alamat_sekolah');
            $table->string('nama_sekolah');
            $table->integer('kelas');
            $table->string('jenis_kelamin');
            $table->date('tgl_lahir');
            $table->integer('bb');
            $table->integer('tb');
            $table->string('alergi');
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
        Schema::dropIfExists('anak');
    }
}
