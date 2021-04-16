<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentDon extends Model
{
    public $table = 'comment_dons';

    protected $fillable = ['name','comment','user_id','user_image','pro_id'];

    public $timestamps = false;

    public function replies(){
    	return $this->hasMany('App\ReplyDonComment');
    }
}
