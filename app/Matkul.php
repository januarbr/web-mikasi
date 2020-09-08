<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $fillable = [
        'jurusan',
        'semester',
        'matkul',
        'link',
        'tema'
    ];

    protected $table = 'matakuliah';
    protected $primaryKey = 'id';
}
