<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    // menyambungkan ke table pegawai
    protected $table = 'master_jabatan_gaji';

    public function pegawai()
    {

        return $this->hasMany(Pegawai::class);
    }
}
