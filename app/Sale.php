<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $table = 'sales';

    protected $fillable = ['name','categories','price','detail','image','location'];

    public $timestamps = false;
    
    public function sale(){
        return $this->belongsTo('App\Sale');
     }
}
