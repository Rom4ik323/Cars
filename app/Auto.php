<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $fillable = ['id', 'name', 'cost', 'img', 'img1', 'img2', 'hs', 'liters', 'fuel', 'drive'];

    protected $table = 'Cars';
}
