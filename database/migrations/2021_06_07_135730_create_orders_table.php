<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->String('id_sewa', 15)->primary();
            $table->String('id_user', 15)->nullable();
            $table->date('tanggal_sewa')->nullable();
            $table->date('tanggal_kembali')->nullable();
            $table->Integer('harga_sewa')->nullable();
            $table->String('status', 25)->nullable();
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
        Schema::dropIfExists('order');
    }
}
