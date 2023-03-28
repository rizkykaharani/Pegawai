<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToPegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pegawai', function (Blueprint $table) {
            //
            $table->string('jenis_kelamin');
            $table->string('jabatan');
            $table->string('alamat');
            $table->string('agama');
            $table->string('no_hp');
            $table->string('email');
            $table->string('status_pernikahan');
            $table->string('total_gaji');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pegawai', function (Blueprint $table) {
            //
        });
    }
}
