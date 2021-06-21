<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusIdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dvd', function (Blueprint $table) {
            $table->unsignedBigInteger('status_id')->nullable();
            $table->index('status_id');
            $table->foreign('status_id')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('dvd', 'status_dvd'))
        {
            Schema::table('dvd', function (Blueprint $table)
            {
                $table->dropColumn('status_dvd');
            });
        }
    }
}
