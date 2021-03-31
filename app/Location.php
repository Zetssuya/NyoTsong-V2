<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $table = 'locations';

    protected $fillable = ['location'];

    public $timestamps = false;
}
