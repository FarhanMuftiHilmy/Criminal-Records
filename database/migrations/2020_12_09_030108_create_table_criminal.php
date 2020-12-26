<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCriminal extends Migration
{
    /**
     * Run the migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_criminal', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kasus');
            $table->string('pidana');
            $table->string('denda');
            $table->string('tgl_tangkap');
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
        Schema::dropIfExists('table_criminal');
    }
}
