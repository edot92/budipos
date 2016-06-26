<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSelisihRemisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selisih_remis', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kantor');
            $table->integer('uang_tunai');
            $table->integer('uang_non_tunai');
            $table->integer('jumlah_uang_non_tunai');
            $table->integer('jumlah_uang_tunai');
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
        Schema::drop('selisih_remis');
    }
}
