<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterJabatanGaji extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_jabatan_gaji', function (Blueprint $table) {
            $table->id();
            $table->Integer('gaji_pokok');
            $table->Integer('transport');
            $table->Integer('tunjangan_keluarga');
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
        Schema::dropIfExists('master_jabatan_gaji');
    }
}
