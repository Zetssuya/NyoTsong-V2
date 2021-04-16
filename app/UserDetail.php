<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    public $table = 'user_details';

    protected $fillable = ['rater_user', 'rated_user', 'rating'];

    public $timestamps = false;
    
  
}
