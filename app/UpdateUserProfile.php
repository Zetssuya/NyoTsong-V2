<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpdateUserProfile extends Model
{
    public $table = 'update_user_profiles';

    protected $fillable = ['user_id','image','contact_no'];

    public $timestamps = false;
}
