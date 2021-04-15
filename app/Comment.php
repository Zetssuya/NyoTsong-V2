<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $table = 'comments';

    protected $fillable = ['name','comment','user_id','user_image','pro_id'];

    public $timestamps = false;

    public function replies(){
    	return $this->hasMany('App\ReplyComment');
    }
}
