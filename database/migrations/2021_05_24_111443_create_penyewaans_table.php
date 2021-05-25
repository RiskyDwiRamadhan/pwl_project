<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyewaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyewaan_dvd', function (Blueprint $table) {
            $table->String('id_penyewaan', 15)->primary();
            $table->String('id_user', 15)->nullable();
            $table->String('id_dvd', 15)->nullable();
            $table->foreign('id_dvd')->references('id_dvd')->on('dvd')->nullable();
            $table->date('tanggal_sewa')->nullable();
            $table->date('tanggal_kembali')->nullable();
            $table->Integer('harga_sewa')->nullable();
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
        Schema::dropIfExists('penyewaan_dvd');
    }
}
