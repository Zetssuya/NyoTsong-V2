<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';

    protected $fillable = ['category'];

    public $timestamps = false;

    // public function sale(){
    //     return $this->belongsTo('App\Sale');
    // }
}
