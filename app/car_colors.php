<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car_colors extends Model
{
    protected $table = 'cars-colors';
    protected $fillable =   ['car_id','color_id'];
}
