<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = ['id', 'name', 'days', 'number', 'cars'];

    protected $table = 'Orders';
}
