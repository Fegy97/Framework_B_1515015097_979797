<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableDosenMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen_matakuliahh', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dosen_id',false,true);
            $table->foreign('dosen_id')->references('id')->on('dosen');
            $table->integer('matakuliahh_id',false,true);
            $table->foreign('matakuliahh_id')->references('id')->on('matakuliahh');
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
        Schema::drop('dosen_matakuliah');
    }
}
