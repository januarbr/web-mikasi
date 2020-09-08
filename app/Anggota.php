<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable =[
        'anggota_id',
        'kode_anggota',
        'nama_anggota',
        'alamat_anggota'
    ];
    
   protected $table = 'anggota';
   protected $primaryKey = 'anggota_id';
}
