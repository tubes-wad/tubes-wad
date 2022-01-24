<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Infaq extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('infaq', function (Blueprint $table) {
            $table->bigIncrements('id_infaq')->length(5);
            $table->string('nama', 255);
            $table->string('email', 50);
            $table->string('id_user', 500);
            $table->string('jumlah', 20);
            $table->string('status', 50);
            $table->string('bukti', 150);
            $table->string('anon', 50);
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
        Schema::drop('infaq');
    }
}
