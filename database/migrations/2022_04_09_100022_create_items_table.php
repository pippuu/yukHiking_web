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
            $table->string('ID_Agent');
            $table->string('Nama_Agent');
            $table->string('Nama_Barang');
            $table->integer('Stock');
            $table->string('Harga');
            $table->string('ID_Penyewa')->nullable(true);
            $table->date('tanggal_sewa')->nullable(true);

            $table->foreign('ID_Penyewa')->references('ID_user')->on('users');
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
