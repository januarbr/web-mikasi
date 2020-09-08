<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{
    protected $fillable=[
        'tema',
        'file'
    ];
    
   protected $table = 'framework';
   protected $primaryKey = 'id';
}
