<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table        =   'product';
    protected $filable      =   ['id','name','gia','cate_id'];
    public    $timestamps   =   false;

    public function images () {
        return $this->hasMany('App\images');
    }
}
