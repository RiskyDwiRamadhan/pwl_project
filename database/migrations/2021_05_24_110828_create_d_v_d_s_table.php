<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDVDSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dvd', function (Blueprint $table) {
            $table->String('id_dvd', 15)->primary();
            $table->String('nama_dvd', 20)->nullable();
            $table->String('harga_dvd', 10)->nullable();
            $table->String('status_dvd', 50)->nullable();
            $table->Integer('stok')->nullable();
            $table->String('image_dvd', 255)->nullable();
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
        Schema::dropIfExists('dvd');
    }
}
