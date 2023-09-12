<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = ['name', 'location', 'product', 'house', 'flat'];
    protected $table = 'orders';
    public $timestamps = false;

}
