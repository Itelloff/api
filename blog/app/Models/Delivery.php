<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
   protected $fillable = ['location','price'];
    protected $table = 'delivery';
    public $timestamps = false;

}
