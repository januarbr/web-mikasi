<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pinjam extends Model
{
    protected $fillable =['id',
            'buku_id',
            'anggota_id',
            'tgl_pinjam',
            'tgl_kembali',
            'kembali',
        ];

  protected $table = 'pinjam';

    public $timestamps = true;

    protected $primaryKey = 'id';

}
