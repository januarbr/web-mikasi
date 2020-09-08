<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $fillable=[
        'nip',
        'nama_petugas',
        'alamat_petugas'
    ];
    protected $table = 'petugas';
    protected $primaryKey = 'id';
}
