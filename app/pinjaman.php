<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pinjaman extends Model
{
    //
    protected $fillable = ['id','id_karyawan','jumlah_pinjaman'];
    protected $visible = ['id','id_karyawan','jumlah_pinjaman'];
}
