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
        Schema::create('items', function (Blueprint $table) {
            $table->id('ID_Items');
            $table->timestamps();
            $table->string('Nama_Barang');
            $table->integer('Stock');
            $table->string('Harga');

            $table->foreignId('ID_agent');
            $table->foreignId('ID_Penyewa')->nullable(true);
            $table->foreignId('ID_Transaksi')->nullable(true);

            $table->foreign('ID_agent')->references('ID_agent')->on('agents');
            $table->foreign('ID_Penyewa')->references('ID_user')->on('users');
            $table->foreign('ID_Transaksi')->references('ID_Transaksi')->on('transaksis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
