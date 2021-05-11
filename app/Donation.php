<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    public $table = 'donations';

    protected $fillable = ['user_id','name','detail','image','location','status'];

    // public $timestamps = false;
}
