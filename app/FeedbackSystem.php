<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackSystem extends Model
{
    public $table = 'feedback_systems';

    protected $fillable = ['user_id', 'feedback'];

    // public $timestamps = false;
}
