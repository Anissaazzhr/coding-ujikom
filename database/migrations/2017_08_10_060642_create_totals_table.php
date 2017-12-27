<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTotalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('totals', function (Blueprint $table) {
            $table->increments('id');
            $table->varchar('id_karyawan')->unsigned();
            $table->varchar('id_jabatan')->unsigned();
            $table->varchar('id_pinjaman')->unsigned();
            $table->timestamps();

            $table->foreign('id_karyawan')->references('id')
            ->on('karyawans')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('id_jabatan')->references('id')
            ->on('jabatans')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('id_pinjaman')->references('id')
            ->on('pinjamans')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('totals');
    }
}
