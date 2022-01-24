<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransaksiCrowdfunding extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('transaksiCrowdFunding', function (Blueprint $table) {
            $table->bigIncrements('id_donasi')->length(5);
            $table->string('nama', 255);
            $table->string('email', 50);
            $table->string('id_user', 500);
            $table->string('jumlah', 20);
            $table->string('status', 50);
            $table->string('bukti', 150);
            $table->string('anon', 50);
            $table->string('id_crowdfunding', 5);
            $table->text('message');
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
        Schema::drop('transaksiCrowdFunding');
    }
}
