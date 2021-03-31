<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $table = 'sales';

    protected $fillable = ['name','categories','price','detail','location'];

    public $timestamps = false;
}
