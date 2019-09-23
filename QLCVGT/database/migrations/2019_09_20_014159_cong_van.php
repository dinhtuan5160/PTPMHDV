<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CongVan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('CongVan',function(Blueprint $table){
            $table->increments('id');
            $table->string('ten');
            $table->integer('theloai')->unsigned();
            $table->integer('id_loaicongvan')->unsigned();
            $table->foreign('id_loaicongvan')->references('id')->on('LoaiCongVan');
            $table->integer('trangthai')->unsigned();
            $table->string('nguoigui');
            $table->string('bophannhan');
            $table->string('bophandaxuly');
            $table->integer('songuoidoc')->unsigned();
            $table->string('filedinhkem');
            $table->string('dinhdang');
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
        //
    }
}
