<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
    protected $table    =   'cars';
    protected $fillable =   ['name','price'];

    
    
}
