<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReplyDonComment extends Model
{
    public $table = 'reply_don_comments';

    protected $fillable = ['comment_id', 'name', 'reply', 'user_id','user_image'];

    public $timestamps = false;
}
