<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable=[
        'kode_buku',
        'judul_buku',
        'pengarang_buku',
        'penerbit_buku',
        'jumlah_buku',
        'file'
    ];
    protected $table = 'buku';
    protected $primaryKey = 'buku_id';
}
