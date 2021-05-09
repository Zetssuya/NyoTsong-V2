<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOTP extends Model
{
    public $table = 'user_o_t_ps';

    protected $fillable = ['email', 'verified'];

    public $timestamps = false;
}
