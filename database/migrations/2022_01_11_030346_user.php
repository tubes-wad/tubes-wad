<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id_user')->length(5);
            $table->string('nama_lengkap', 255);
            $table->string('email', 50);
            $table->string('password', 50);
            $table->string('status', 20);
            $table->string('nim', 50);
            $table->string('alamat', 150);
            $table->string('nohp', 50);
            $table->date('updated_at');
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('user');
    }
}
