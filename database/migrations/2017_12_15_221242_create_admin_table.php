<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{

    public function up()
    {
        Schema::create('admins', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique;
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('admins');
    }
}
