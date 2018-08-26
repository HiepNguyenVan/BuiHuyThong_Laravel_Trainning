<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $table    =   'images';
    protected $fillable =   ['id','name','product_id'];
    public $timestamps  =   false;

    public function product () {
        return $this->belongsTo('App\Product');
    }
}
