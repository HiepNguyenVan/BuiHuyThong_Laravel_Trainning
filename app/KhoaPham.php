<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhoaPham extends Model
{
    protected $table        =   'kpt_khoapham';
    protected $fillable     =   ['monhoc','giatien','giangvien'];
    public $timestamps      =   false;
}
