<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_order', function (Blueprint $table) {
            $table->String('id_dorder', 15)->primary();
            $table->String('id_sewa', 15)->nullable();
            $table->foreign('id_sewa')->references('id_sewa')->on('order')->nullable();
            $table->String('id_dvd', 15)->nullable();
            $table->foreign('id_dvd')->references('id_dvd')->on('dvd')->nullable();
            $table->Integer('harga')->nullable();
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
        Schema::dropIfExists('detail_order');
    }
}
