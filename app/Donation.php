<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    public $table = 'donations';

    protected $fillable = ['user_id','name','quantity','detail','image','location','status'];

    // public $timestamps = false;
}
