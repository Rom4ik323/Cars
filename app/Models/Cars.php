<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'cost',
        'content'
    ];
    protected $table = 'cars';
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';

}
